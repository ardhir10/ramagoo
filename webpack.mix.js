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
    .js('resources/js/sweetalert.js', 'public/js')
    .js('resources/js/feather-icons.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/floating-label.scss', 'public/css')
    
    // CLIENT ASSETS
    .styles([
    'public/assets_client/css/all-fontawesome.min.css',
    'public/assets_client/css/bootstrap.min.css',
    'public/assets_client/css/plugins/slick.min.css',
    'public/assets_client/css/plugins/magnific-popup.css',
    'public/assets_client/css/plugins/spacing-and-height.css',
    'public/assets_client/css/theme-modules.css'
    ], 'public/assets_client/css/all.css')

    .scripts([
        'public/assets_client/js/jquery.min.js',
        'public/assets_client/js/plugins/bootstrap.bundle.min.js',
        'public/assets_client/js/plugins/isotope.pkgd.min.js',
        'public/assets_client/js/plugins/jquery.countdown.min.js',
        'public/assets_client/js/plugins/query.countTo.js',
        'public/assets_client/js/plugins/jquery.magnific-popup.min.jss',
        'public/assets_client/js/plugins/onepage.min.js',
        'public/assets_client/js/plugins/slick.min.js',
        'public/assets_client/js/plugins/instafeed.min.js',
        'public/assets_client/js/plugins/imagesloaded.pkgd.min.js',
        'public/assets_client/js/plugins/contact-us.min.js',
        'public/assets_client/js/main.js',
        'public/assets_client/js/main.bundle.js',
    ], 'public/assets_client/js/all.js');


