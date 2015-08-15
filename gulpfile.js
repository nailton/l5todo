// var gulp = require("gulp");
var elixir = require('laravel-elixir');
// var del = require('del');
var paths = { 'jquery': './vendor/bower_components/jquery/' }

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

// elixir.extend("remove", function(path) {
//     gulp.task("remove", function() {
//         del(path);
//     });
//     return this.queueTask("remove");
// });

elixir(function(mix) {
    mix.styles([
        "custom.css"
    ], null, "resources/assets/painel/css/")

    .scripts([
        paths.jquery + "dist/jquery.js"], 'public/js/app.js', './'
    )

    .copy("resources/assets/images/", "public/images/")

    .version(["css/all.css", "js/app.js"])

    // .remove([ 'public/css', 'public/js' ])
});
