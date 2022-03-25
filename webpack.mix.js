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
    .js('resources/js/active.js', 'public/js')
    .js('resources/js/style.js', 'public/js')
    .js('resources/js/plugins/plugins.js', 'public/js')
    .copy('resources/image','public/images/')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/bootstrap.css', 'public/css/style.css')
    .postCss('resources/css/style.css', 'public/css/main.css')
    .postCss('resources/css/magnific-popup.css', 'public/css/main.css')
    .postCss('resources/css/classy-nav.css', 'public/css/main.css')
    .postCss('resources/css/font-awesome.min.css', 'public/css/main.css');
if (mix.inProduction()) {
    mix.version();
}
