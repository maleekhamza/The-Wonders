<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c

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
<<<<<<< HEAD
=======
        Schema::defaultStringLength(191);
>>>>>>> 64f66bdaa00a0adcc2ba66b9fee14d334c37cc6c
        //
    }
}
