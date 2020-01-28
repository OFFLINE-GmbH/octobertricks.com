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
