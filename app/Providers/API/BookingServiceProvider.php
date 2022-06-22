<?php

namespace App\Providers\API;

use App\Contracts\Repositories\BookingRepositoryContract;
use App\Contracts\Services\BookingServiceContract;
use App\Repositories\BookingRepository;
use App\Services\BookingService;
use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
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
        $this->app->singleton(BookingRepositoryContract::class, BookingRepository::class);
        $this->app->singleton(BookingServiceContract::class, BookingService::class);
    }
}
