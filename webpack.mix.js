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

    // FRONTEND JS
mix .js('resources/js/app.js', 'public/js')
    .js('resources/js/tinymce.js', 'public/js')
    .js('resources/js/style.js', 'public/js')
    .js('resources/js/cropie.js', 'public/js')
    .js('resources/js/animate.js', 'public/js/animations.js')
    .js('resources/js/alert.js', 'public/js')
    .js('resources/js/custom.js', 'public/js/app.js')
    .js('resources/js/swiper.js', 'public/js/slide.js')
    
    //BACKEND JS 
    // .copy('resources/js/backend/', 'public/js/') 

    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])

    .copy('resources/image/','public/images')

    //BACKEND STYLE
    // .copy('resources/css/', 'public/css/')
    
    .postCss('resources/css/backend.css', 'public/css/')

    //FRONTEND STYLE
    .postCss('resources/css/style.css', 'public/css/main.css')
    .postCss('resources/css/frontend.css', 'public/css/front.css')
    .postCss('resources/css/swiper.css', 'public/css/front.css')
    .postCss('resources/css/font-awesome.min.css', 'public/css/main.css')
    .postCss('resources/css/animate.css', 'public/css/main.css')
    .postCss('resources/css/bootstrap.css', 'public/css/bootstrap.css')
    .postCss('resources/css/cropie.css', 'public/css/')
  
if (mix.inProduction()) {
    mix.version();
}
