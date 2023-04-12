<?php
namespace Curd\Project;

use Illuminate\Support\ServiceProvider;

class curdserviseprovider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

         $this->app->make('Curd\Project\curdcontroller');
         $this->loadViewsFrom(__DIR__.'/views','Project');
         $this->loadMigrationsFrom(__DIR__.'/database/migrations');


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       include __DIR__.'/route.php';
    }
}
