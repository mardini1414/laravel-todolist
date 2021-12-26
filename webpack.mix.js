const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'js/app.js')
    .sass('resources/sass/app.scss', 'css/app.css')
    .purgeCss();