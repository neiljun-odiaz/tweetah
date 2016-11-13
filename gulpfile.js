const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2')

elixir(mix => {
    mix.sass('app.scss');
    mix.webpack('app.js');
});
