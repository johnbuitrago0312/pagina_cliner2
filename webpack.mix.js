const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
        'resources/css/bootstrap.css',
        'resources/css/bootstrap.css.map',
        'resources/css/estilosnav.css',
    ], 'public/css/app.css')
    .scripts([
        'resources/js/app.js',
        'resources/js/bootstrap.js',
        'resources/js/bootstrap.js.map',
        'resources/js/jquery.min.js.js',
    ], 'public/js/app.js');