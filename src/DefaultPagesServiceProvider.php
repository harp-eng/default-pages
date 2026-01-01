<?php

namespace Harpreet\DefaultPages;

use Illuminate\Support\ServiceProvider;

class DefaultPagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/default-pages.php',
            'default-pages'
        );
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'default-pages');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/default-pages'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../config/default-pages.php' => config_path('default-pages.php'),
        ], 'config');
    }
}
