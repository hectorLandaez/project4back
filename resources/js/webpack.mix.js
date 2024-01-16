const mix = require('laravel-mix');

mix.react('resources/assets/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');