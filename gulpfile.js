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

var files = {
    scripts:[
        'jquery.min.js',
        'bootstrap.min.js',
        'jquery.pjax.js'
    ],
    styles:[
    ],
    sass:[
        'app.sass'
    ]
};

//elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix.sass(files.sass);
});

elixir(function (mix) {
    mix.scripts(files.scripts);
});

elixir(function(mix) {
    mix.version(['css/app.css', 'js/all.js']);
});