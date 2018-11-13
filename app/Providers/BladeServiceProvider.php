<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('publisher', function () {
            return auth()->user()->hasRole('publisher');
        });
        
        Blade::if('admin', function () {
            return auth()->user()->hasRole('admin');
        });
        
        Blade::if('employer', function () {
            return auth()->user()->hasRole('employer');
        });
        
        Blade::if('impersonating', function(){
            return session()->has('impersonate');
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
