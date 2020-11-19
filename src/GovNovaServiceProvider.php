<?php

namespace LaravelRotEbal\GovNova;

use Illuminate\Support\ServiceProvider;

class GovNovaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'govnova');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'govnova');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('govnova.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/govnova'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/govnova'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/govnova'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        $this->registerRoutes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'govnova');

        // Register the main class to use with the facade
        $this->app->singleton('govnova', function () {
            return new GovNova;
        });
    }



    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes() {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }



    /**
     * Get the Nova route group configuration array.
     *
     * @return array
     */
    protected function routeConfiguration() {
        return [
            'namespace' => 'LaravelRotEbal\GovNova\Http\Controllers',
            'domain' => config('nova.domain', null),
            'as' => 'nova.api.',
            'prefix' => 'nova-api',
            'middleware' => 'nova',
        ];
    }



}
