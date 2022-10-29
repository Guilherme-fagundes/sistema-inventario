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

mix
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/bootstrap/css/bootstrap.css').version()

    .sass('resources/views/admin/css/reset.scss', 'public/admin/css/style.css').version()
    .sass('resources/views/admin/css/left-dash.scss', 'public/admin/css/style.css').version()

    .js('node_modules/jquery/dist/jquery.min.js', 'public/jquery/jquery.min.js').version()
    .js('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/bootsrap/js/bootstrap.js').version();

