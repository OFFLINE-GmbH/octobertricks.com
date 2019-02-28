const hostname = 'octobertricks.test'
const cssWhitelist = [
    'voter__arrow--active',
    'voter--voted-up',
    'voter--voted-down',
    'hljs',
    'tagify--focus',
    'tagify__input',
    'tagify__dropdown',
    'tagify__dropdown__item--active',
    'medium-trick__meta--green',
    'dot--green',
    'nav-visible',
    'gdpr-banner-host--visible',
    'gdpr-banner-host--out',
    'hljs',
    'trick__content',
]
// =====================================================================
import gulp from 'gulp'
import stylus from 'gulp-stylus'
import poststylus from 'poststylus'
import uglify from 'gulp-uglify'
import browserify from 'browserify'
import sourcemaps from 'gulp-sourcemaps'
import rupture from 'rupture'
import babelify from 'babelify'
import gulpif from 'gulp-if'
import util from 'gulp-util'
import source from 'vinyl-source-stream'
import streamify from 'gulp-streamify'
import pump from 'pump'
import cssnano from 'gulp-cssnano'
import purgecss from '@fullhuman/postcss-purgecss'
import autoprefixer from 'autoprefixer'
import { create } from 'browser-sync'

const isProd = util.env.production
const basepath = __dirname + '/../../'
const browserSync = create();
const paths = {
    cssSource: 'resources/styl',
    jsSource: 'resources/js',
    destination: 'assets'
};

gulp.task('styles', done => {
    const steps = [
        gulp.src(`${paths.cssSource}/main.styl`),
        gulpif(! isProd, sourcemaps.init()),
        stylus({
            use: [
                rupture(),
                poststylus([
                    'postcss-normalize.css',
                    'lost',
                    autoprefixer({
                        browsers: [
                            'last 3 versions',
                            'safari >= 8',
                            'ie >= 11',
                            'ios 7',
                        ]
                    }),
                    purgecss({
                        whitelist: cssWhitelist,
                        whitelistPatterns: [/^\.content/, /pre/, /code/],
                        whitelistPatternsChildren: [/^\.content/, /trick-content/],
                        content: [
                            `${basepath}/themes/**/*.htm`,
                            `${basepath}/plugins/**/*.htm`,
                            `${basepath}/storage/cms/twig/**/*.php`,
                        ]
                    }),
                ])
            ]
        }),
        gulpif(isProd, cssnano({autoprefixer: {add: false}})),
        gulpif(! isProd, sourcemaps.write('./')),
        gulp.dest(paths.destination),
        browserSync.stream({match: '**/*.css'})
    ]
    pump(steps, done)
});
gulp.task('scripts', function (done) {
    const steps = [
        browserify(`${paths.jsSource}/app.js`)
            .transform(babelify, {presets: [['env', {useBuiltIns: 'entry'}]]})
            .bundle(),
        source('app.js'),
        gulpif(isProd, streamify(uglify())),
        gulp.dest(paths.destination)
    ]
    pump(steps, done)
});

// Dieser Task stellt sicher, dass "script" ausgeführt wurde
// bevor BrowserSync neu geladen wird
gulp.task('scripts-watch', gulp.series('scripts', function (done) {
    browserSync.reload();
    done();
}))

function watch () {
    gulp.watch(paths.cssSource + '/**/*.styl', gulp.series('styles'))
    gulp.watch(paths.jsSource + '/**/*.js', gulp.series('scripts-watch'))
}

gulp.task('default', gulp.parallel('scripts-watch', 'styles'));
gulp.task('watch', gulp.series('styles', 'scripts-watch', watch))
gulp.task('browser-sync', gulp.series(gulp.parallel('scripts', 'styles'), function () {
    browserSync.init({
        open: false,
        reloadOnRestart: true,
        notify: false,
        proxy: hostname,
        files: ['**/*.htm', '**/*.yaml', '../../plugins/**/*.php', '../../plugins/**/*.htm']
    });
    watch()
}));
