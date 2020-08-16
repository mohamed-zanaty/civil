<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Set;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Site Data
        View::composer('*', function($view){
            $view->with('set', Set::find(1));
        });
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
