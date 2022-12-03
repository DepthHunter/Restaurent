<?php

namespace App\Providers;

use App\Services\ChefService;
use App\Services\HomeService;
use App\Services\Impl\ChefServiceImpl;
use App\Services\Impl\HomeServiceImpl;
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
        $this->app->bind(HomeService::class, HomeServiceImpl::class);
        $this->app->bind(ChefService::class, ChefServiceImpl::class);


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
