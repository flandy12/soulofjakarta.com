const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/tinymce.js', 'public/js')
    .js('resources/js/style.js', 'public/js')
    .js('resources/js/animate.js', 'public/js/animations.js')
    .js('resources/js/alert.js', 'public/js')
    
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    // .copy('resources/image/','public/images')
    //backend style
    .postCss('resources/css/backend.css', 'public/css/')

    //fronteEND
    // .postCss('resources/css/owl.carousel.min.css', 'public/css/main.css')
    .postCss('resources/css/style.css', 'public/css/main.css')
    .postCss('resources/css/magnific-popup.css', 'public/css/main.css')
    .postCss('resources/css/frontend.css', 'public/css/front.css')
    .postCss('resources/css/font-awesome.min.css', 'public/css/main.css')
    .postCss('resources/css/classy-nav.css', 'public/css/main.css')
    .postCss('resources/css/animate.css', 'public/css/main.css')
    .postCss('resources/css/bootstrap.css', 'public/css/bootstrap.css')
  
if (mix.inProduction()) {
    mix.version();
}
