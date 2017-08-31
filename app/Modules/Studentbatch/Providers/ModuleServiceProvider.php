<?php

namespace App\Modules\Studentbatch\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'studentbatch');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'studentbatch');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'studentbatch');
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
