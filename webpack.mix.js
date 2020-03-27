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

mix.js(['resources/js/app.js',
	    'resources/js/custom.js',
	    'resources/plugins/editor/summernote.js'], 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


mix.styles(['resources/plugins/editor/summernote.css','resources/css/custom.css']
	,'public/css/all.css');


mix.copyDirectory('resources/plugins/editor/font', 'public/fonts');
