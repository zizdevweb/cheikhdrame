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

mix.js(['resources/js/stylish-portfolio.js','resources/js/stylish-portfolio.min.js'], 'public/js')
.sass('resources/sass/app.scss','resources/sass/variables.scss', 'public/css')
.styles(['resources/css/fichiers_css1.css','resources/css/fichiers_css2.css','resources/css/stylish-portfolio.min.css'], 'public/css/all.css');
