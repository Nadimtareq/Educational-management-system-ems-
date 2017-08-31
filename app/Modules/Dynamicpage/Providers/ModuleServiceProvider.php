<?php

namespace App\Modules\Dynamicpage\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'dynamicpage');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'dynamicpage');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'dynamicpage');
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
