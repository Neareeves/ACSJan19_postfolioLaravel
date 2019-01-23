const mix = require('laravel-mix');

mix.setResourceRoot('/portfolioLaravel/public/');
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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/scriptprojets.js', 'public/js')
   .js('resources/js/script.js', 'public/js')
   .js('resources/js/scriptaccueil.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/style.scss', 'public/css')
   .copyDirectory('resources/images', 'public/images')
   .copyDirectory('resources/fonts','public/fonts')
