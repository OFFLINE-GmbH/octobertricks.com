@setup
    $project   = 'octobertricks.com';

    $author = isset($author) ? $author : "jemandem";
    $branch = isset($branch) ? $branch : "unbekanntem Branch";
    $commit = isset($commit) ? $commit : "Ohne Commitnachricht";
@endsetup

@servers(['web' => $user . '@' . $server, 'localhost' => '127.0.0.1'])

@story('deploy')
    update
    copy-assets
@endstory

@task('update', ['on' => 'web'])
    PHP=php72

    cd {{ $directory }}
    git pull
    [ ! -f "composer.phar" ] && wget https://getcomposer.org/composer.phar
    $PHP composer.phar install --no-interaction --no-dev --prefer-dist --ignore-platform-reqs
    $PHP ./vendor/bin/october install --php=$PHP
    $PHP artisan -v october:up

    ## START UPDATE CHECK
    LOCK_FILE=".last-update-check"
    NOW=$(date +%s)
    LAST_CHECK=$( [ -f $LOCK_FILE ] && cat $LOCK_FILE || echo 0 )
    SECONDS_SINCE=$(expr $NOW - $LAST_CHECK)

    if [ "$SECONDS_SINCE" -gt "86400" ]; then
        HOSTNAME=$( hostname )
        GIT=$( which git )

        $PHP composer.phar self-update
        $PHP composer.phar update --no-interaction --no-dev --prefer-dist --ignore-platform-reqs
        $PHP artisan -v october:update

        if [[ -n $(git status -s) ]]; then
            $GIT add --all .
            $GIT commit -m "[ci skip] oc-bootstrapper updated October CMS ({{ $project }})"
            $GIT push origin master
        fi

        echo $NOW > $LOCK_FILE
    else
        echo "Skipping update check (last check was $SECONDS_SINCE seconds ago)"
    fi
    ## END UPDATE CHECK

    git status -s
@endtask

@task('copy-assets', ['on' => 'localhost'])
    THEME=$(ls themes | head -n1)
    scp -r themes/$THEME/assets/* {{ $user }}{{ '@' . $server }}:{{ $directory }}/themes/$THEME/assets/
@endtask

@finished
    $message = sprintf(
        "`%s` von `%s` via `%s`:\n\n> %s",
        $project,
        ucfirst($author),
        $branch,
        $commit
    );
    @slack($slack, 'deployments', $message)
@endfinished
