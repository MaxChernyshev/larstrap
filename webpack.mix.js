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

mix.sass('resources/assets/front/sass/additional.scss', 'public/assets/front/css/sass.css');


mix.styles([
        'resources/assets/admin/plugins/fontawesome-free/css/all.css',
        'resources/assets/admin/css/adminlte.css'
    ], 'public/assets/admin/css/admin.min.css'
)

mix.styles([
        'resources/assets/front/css/bootstrap.css',
        'resources/assets/admin/plugins/fontawesome-free/css/all.css',
        'public/assets/front/css/sass.css'
    ], 'public/assets/front/css/additional.css'
)


mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.js',
    'resources/assets/admin/js/adminlte.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.min.js')

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.js',
    'resources/assets/front/js/scroll.js',
], 'public/assets/front/js/scripts.min.js')


mix.copyDirectory(
    'resources/assets/admin/plugins/fontawesome-free/webfonts',
    'public/assets/front/webfonts'
)

mix.copyDirectory(
    'resources/assets/admin/img',
    'public/assets/admin/img'
)

mix.copyDirectory(
    'resources/assets/front/img',
    'public/assets/front/img'
)

mix.copy(
    'resources/assets/admin/css/adminlte.css.map',
    'public/assets/admin/css/adminlte.css.map'
)

mix.copy(
    'resources/assets/admin/js/adminlte.js.map',
    'public/assets/admin/js/adminlte.js.map'
)

