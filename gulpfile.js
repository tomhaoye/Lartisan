var elixir = require('laravel-elixir'),
    clean = require("gulp-clean"),
    gulpCopy = require('gulp-copy');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var files = {
    qiniu: [
        'qiniu/plupload/plupload.full.min.js',
        'qiniu/plupload/i18n/zh_CN.js',
        'qiniu/qiniu.js',
        'qiniu/ui.js'
    ],
    scripts: [
        'lib/jquery.min.js',
        'lib/bootstrap.min.js',
        'lib/masonry.min.js',
        'lib/jquery.pjax.js',
        'lib/jquery.rotate.min.js',
        'lib/prism.js',
        'tools.js',
        'layouts',
        'topics'
    ],
    styles: [
        'lib/bootstrap.min.css',
        'lib/font-awesome.min.css',
        'lib/animate.css',
        'lib/prism.css',
        'lib/hover-min.css',
        'layouts',
        'topics'
    ],
    sass: []
};

//elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.scripts(files.qiniu, 'public/js/qiniu.js');
    mix.styles(files.styles);
    mix.scripts(files.scripts);
    mix.version(['css/all.css', 'js/all.js', 'js/qiniu.js']);
});