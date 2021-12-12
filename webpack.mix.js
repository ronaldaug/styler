let mix = require('laravel-mix');
let fs = require('fs');

mix.js('resources/js/app.js', 'assets/js/')
.sass('resources/sass/app.scss', 'assets/css/');

if(!fs.existsSync('./assets/img/favicon.png')){
    mix.copyDirectory('resources/img','assets/img');
}