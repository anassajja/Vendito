const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/styles.scss', 'public/css');

// Path: resources/css/styles.scss
mix.css('resources/css/styles.css', 'public/css');
