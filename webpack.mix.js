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

mix.webpackConfig({
    resolve: {
      extensions: ['.js', '.vue', '.json'],
      alias: {
        '@': __dirname + '/resources/js',
        '@components': __dirname + '/resources/js/components',
      }
    }
})

mix.js('resources/js/app.js', 'public/js').vue().sass('resources/sass/app.scss', 'public/css');