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

mix.autoload({
	'jquery' : ['jQuery', '$'],
})

mix.styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
	'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'resources/assets/css/app.css',
],'public/assets/app.css');

mix.js([
        'node_modules/jquery/dist/jquery.min.js',
	'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
	'node_modules/popper.js/dist/popper.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
	'node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
        'resources/assets/js/app.js',
], 'public/assets/app.js');

