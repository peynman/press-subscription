<?php

namespace Larapress\Subscription\Providers;

use Illuminate\Broadcasting\BroadcastManager;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @param  BroadcastManager $broadcastManager
     * @return void
     */
    public function boot(BroadcastManager $broadcastManager)
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'larapress');

        $this->publishes([
            __DIR__.'/../../config/subscription.php' => config_path('larapress/subscription.php'),
        ], ['config', 'larapress', 'larapress-subscription']);
    }
}
