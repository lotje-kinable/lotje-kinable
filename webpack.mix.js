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

// const mix = require("laravel-mix");
// require("laravel-mix-vue3");


mix.js('resources/js/app.js' , 'public/js')
    .sourceMaps(true, 'source-map')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),

        require('autoprefixer'),
    ]);
    // .vue3({
    //     extractStyles: true,
    //     globalStyles: false
    // });

if (mix.inProduction()) {
    mix.version();
}
