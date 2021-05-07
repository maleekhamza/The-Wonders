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

    mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/animated.css' , 'resources/css/fontawesome.css' , 'resources/css/templatemo-space-dynamic.css' , 'resources/css/owl.css'],
     'public/css/home.css')
    .scripts(['resources/js/animation.js' , 'resources/js/owl-carousel.js' , 'resources/js/tabs.js','resources/js/templatemo-custom.js','resources/js/bootstrap.js','resources/js/imagesloaded.js','resources/js/isotope.js' ],'public/js/home.js')
     
    .styles(['resources/css/animated.css' , 'resources/css/fontawesome.css' , 'resources/css/owl.css' , 'resources/css/templatemo-space-dynamic.css' ],
     'public/css/home.css')
     .styles(['resources/css/dashboard.css'],
     'public/css/admin.css')
     .scripts(['resources/js/animation.js' , 'resources/js/owl-carousel.js' , 'resources/js/tabs.js','resources/js/templatemo-custom.js','resources/js/bootstrap.js','resources/js/imagesloaded.js','resources/js/isotope.js' ],'public/js/home.js')
     .scripts(['resources/js/dashboard.js'],
     'public/js/admin.js')

