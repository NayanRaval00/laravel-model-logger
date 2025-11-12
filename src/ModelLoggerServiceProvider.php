<?php

namespace laravelLogger\modelLogger;

use Illuminate\Support\ServiceProvider;

class ModelLoggerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/model-logger.php', 'model-logger');
    }

    public function boot(): void
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../config/model-logger.php' => config_path('model-logger.php'),
        ], 'config');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
