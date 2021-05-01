<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD


=======
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
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
        //
        Schema::defaultStringLength(191);

        Schema::defaultStringLength(191);
    }
}
=======
        Schema::defaultStringLength(191);
        //
    }
}
>>>>>>> bfd514df1e48f50305bbae2dd36c9e112ee1b0c1
