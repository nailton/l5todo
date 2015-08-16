var elixir = require('laravel-elixir');
var paths = {
        'jquery': './vendor/bower_components/jquery/',
        'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
    }
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

elixir(function(mix) {
    mix.stylesIn("resources/assets/painel/css/")
        .copy("resources/assets/fonts/", "public/build/fonts")

    .scripts([
        paths.jquery + "dist/jquery.js",
        paths.bootstrap + "javascripts/bootstrap.js"
    ], 'public/js/app.js', './')

    .version(["css/all.css", "js/app.js"])
});
