<?php

namespace App\Providers\API;

use App\Contracts\Services\CalculateServiceContract;
use App\Services\CalculateService;
use Illuminate\Support\ServiceProvider;

class CalculateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerContracts();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function registerContracts(){
        $this->app->singleton(CalculateServiceContract::class, CalculateService::class);
    }
}
