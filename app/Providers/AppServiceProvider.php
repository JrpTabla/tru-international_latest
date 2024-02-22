<?php

namespace App\Providers;

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
        //
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

    // Define numhash function
    public function numhash($inNum)
    {
        return (((0x0000FFFF & $inNum) << 16) + ((0xFFFF0000 & $inNum) >> 16));
    }
}
