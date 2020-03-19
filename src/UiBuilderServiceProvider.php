<?php

namespace CaoMinhDuc\UiBuilder;

use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelMojito\ViewAssertion;
class UiBuilderServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ui-builder');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui-builder');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('ui-builder.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/ui-builder'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/ui-builder'),
            ], 'assets');

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/ui-builder'),
            ], 'lang');

            // Registering package commands.
            // $this->commands([]);
        }

        $this->addCustomViewAssertion();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ui-builder');

        // Register the main class to use with the facade
        $this->app->singleton('ui-builder', function () {
            return new UiBuilder;
        });
    }

    protected function addCustomViewAssertion()
    {
        ViewAssertion::macro('hasSubmitButton', function () {
            return $this->has('button[type="submit"]');
        });

        ViewAssertion::macro('hasDeleteButton', function (string $url) {
            return $this->has('[dusk="delete-button"][onclick="sendDeleteRequest(\''.$url.'\',this)"]');
        });

        ViewAssertion::macro('hasEditButton', function (string $url) {
            return $this->has('[dusk="edit-button"][href="'.$url.'"]');
        });

        ViewAssertion::macro('hasCancelButton', function (string $url) {
            return $this->has('[dusk="cancel-button"][href="'.$url.'"]');
        });
        
        ViewAssertion::macro('disabled',function(){
            return $this->has('[disabled]');
        });

        ViewAssertion::macro('required',function(){
            return $this->has('[required]');
        });

        ViewAssertion::macro('value',function($value){
            return $this->has("[value='$value']");
        });

        ViewAssertion::macro('inForm', function (string $url,?string $method = NULL) {
            if(NULL === $method)
            {
                return $this->has('form[action="'.$url.'"]');
            }

            return $this->has('form[action="'.$url.'"][method="'.$method.'"]');
        });
    }
}
