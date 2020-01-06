<?php

namespace App\Providers;

use App\Http\repositories\CityRepositoryInterface;
use App\Http\repositories\CustomerRepositoryInterface;
use App\Http\repositories\eloquent\CityEloquentRepository;
use App\Http\repositories\eloquent\CustomerEloquentRepository;
use App\Http\service\CityServiceInterface;
use App\Http\service\CustomerServiceInterface;
use App\Http\service\impl\CityService;
use App\Http\service\impl\CustomerService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerEloquentRepository::class);
        $this->app->singleton(CityServiceInterface::class, CityService::class);
        $this->app->singleton(CityRepositoryInterface::class, CityEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
