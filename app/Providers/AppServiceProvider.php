<?php

namespace App\Providers;
use App\Http\ViewComposers\HeaderComposer;

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
        View()->composer(['shop','home'], HeaderComposer::class);
        
    }
}
