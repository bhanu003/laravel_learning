<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//added line to fix errors 
//https://laravel-news.com/laravel-5-4-key-too-long-error
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
