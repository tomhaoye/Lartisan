var elixir = require('laravel-elixir');

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

//elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.sass('app.scss');
});

elixir(function (mix) {
    mix.scripts(['bootstrap.min.js'],'public/js/bootstrap.min.js').
        scripts(['jquery.min.js'],'public/js/jquery.min.js').
        scripts(['jquery.pjax.js'],'public/js/jquery.pjax.js');
});

elixir(function(mix) {
    mix.version(['css/app.css', 'js/*.js']);
});