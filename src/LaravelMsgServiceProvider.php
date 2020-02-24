<?php

namespace DesolatorMagno\LaravelMsg;

use Illuminate\Support\ServiceProvider;

class LaravelMsgServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/views/message.blade.php' => resource_path('views/laravel-msg/message.blade.php'),
        ], 'laravel-msg');
        $this->loadViewsFrom(__DIR__ . 'views/laravel-msg/', 'laravel-msg');

    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {

    }
}
