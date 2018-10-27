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

mix.browserSync({
    proxy: {
        target: 'localhost:8000',
        reqHeaders: function() {
            return {
                host: 'localhost:3000'
            };
        }
    }
}).webpackConfig(
    {
        module: {
            rules: [
                {
                    test: /\.js/,
                    enforce: "pre",
                    loader: "import-glob-loader2"
                },{
                    test: /\.scss/,
                    enforce: "pre",
                    loader: "import-glob-loader2"
                },
            ]
        }
    })
    .js('resources/js/*.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    
// run versioning on production only
if (mix.inProduction()) {
    mix.version();
}
