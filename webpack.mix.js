let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/home.scss', 'public/css');

//Main web
mix.styles([
    'public/css/app.css',
    'public/css/home.css'
], 'public/css/style.css');

//Custom premium
mix.sass('resources/assets/sass/premium_app.scss', 'public/css/premium.css')
    .styles([
        'public/css/premium.css'
    ], 'public/css/premium.css');