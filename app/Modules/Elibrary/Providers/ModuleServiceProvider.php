<?php

namespace App\Modules\Elibrary\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'elibrary');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'elibrary');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'elibrary');
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
