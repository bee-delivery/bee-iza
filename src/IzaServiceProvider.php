<?php 

namespace Beedelivery\Iza;

use Illuminate\Support\ServiceProvider;

class IzaServiceProvider extends ServiceProvider 
{
    
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/iza.php' => config_path('iza.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/iza.php', 'iza');

        $this->app->singleton('iza', function ($app) {
            return new Iza;
        });
    }

    public function provides()
    {
        return ['iza'];
    }
}