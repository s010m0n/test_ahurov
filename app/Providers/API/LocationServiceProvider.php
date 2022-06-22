<?php

namespace App\Providers\API;

use App\Contracts\Models\LocationContract;
use App\Contracts\Repositories\LocationRepositoryContract;
use App\Contracts\Services\LocationServiceContract;
use App\Models\Location;
use App\Repositories\LocationRepository;
use App\Services\LocationService;
use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
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

    protected function registerContracts(): void
    {
        $this->app->bind(LocationContract::class,Location::class);
        $this->app->singleton(LocationRepositoryContract::class,LocationRepository::class);
        $this->app->singleton(LocationServiceContract::class,LocationService::class);
    }
}
