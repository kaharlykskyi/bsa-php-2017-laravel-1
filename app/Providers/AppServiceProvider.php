<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider,
    App\Repositories\CarRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Contracts\RandomGenerator','App\Services\RandomGeneratorService');
        $this->app->bind('App\Services\Contracts\CarSharing','App\Services\CarSharingService');
        $this->app->bind('CarsRepository', function() {
           return new CarRepository();
        });
    }
}
