<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
=======
	    if(config('app.env') === 'production'){
	    	\URL::forceScheme('https');
	    }
>>>>>>> ff724e8af53e7886e76ef4dd1b019995cd3aafc0
    }
}
