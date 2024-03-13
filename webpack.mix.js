const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .react()
//    .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'node_modules/bootstrap/dist/css/bootstrap.css',
   ], 'public/css/bootstrap.css');
