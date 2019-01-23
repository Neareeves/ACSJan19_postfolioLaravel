var elixir = require('laravel-elixir');
require('laravel-elixir'); // recommended for vue 2
elixir(function(mix) {
      mix.sass([
        'app.scss',
        'controllers.scss'
    ], 'public/assets/css');
});

