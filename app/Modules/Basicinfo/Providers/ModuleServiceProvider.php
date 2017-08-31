<?php

namespace App\Modules\Basicinfo\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'basicinfo');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'basicinfo');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'basicinfo');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
