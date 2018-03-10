<?php

namespace Timerlau\Errcode;

use Illuminate\Support\ServiceProvider;

class ErrcodeServiceProvider extends ServiceProvider
{
    
    public static $abstract = 'errcode';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->publishes([
            __DIR__.'/config/errcode.php' => config_path('errcode.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->_registerApp();
        $this->_mergeConfig();
    }

    private function _registerApp()
    {
        $this->app->singleton(static::$abstract, function ($app) {
            return new Errcode;
        });
    }

    private function _mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/errcode.php', static::$abstract
        );
    }
}
