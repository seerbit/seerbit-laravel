<?php

namespace SeerbitLaravel;

use Illuminate\Support\ServiceProvider;
use Seerbit\Client as SeerBitClient;

class SeerbitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('seerbit.php'),
            ], 'config');
        }


    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'seerbit');

        // Register the main class to use with the facade
        $this->app->singleton('seerbit', function () {
            $client = new SeerBitClient();
            $client->setEnvironment(config('seerbit.environment'));
            $client->setToken(config('seerbit.token'));
            $client->setPublicKey(config('seerbit.public_key'));
            $client->setSecretKey(config('seerbit.secret_key'));
            $client->setLoggerPath(config('seerbit.logger_path'));
            $client->setLogger(config('seerbit.logger'));
            return new SeerbitService($client);
        });
    }
}
