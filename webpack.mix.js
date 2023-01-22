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

 mix.postCss('resources/css/fonts.css', 'public/css').version();
 mix.js('resources/js/notify.js', 'public/js').version();
 mix.js('resources/js/form.js', 'public/js').version();
