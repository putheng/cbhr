<?php

namespace App\Providers;

use App\Models\Withdraw;
use App\Observers\WithdrawObservers;
use Illuminate\Support\ServiceProvider;

class EloquentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Withdraw::observe(WithdrawObservers::class);
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
