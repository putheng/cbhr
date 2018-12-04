<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Listing\UserCompletedListingPayment' => [
            'App\Listeners\Listing\StoreUserCompleteListingPayment',
        ],
        'App\Events\Admin\CompleteListing' => [
            'App\Listeners\Admin\FacebookPostListing\FacebookPostListing'
        ],
        'App\Events\Admin\DepositApprovedEvent' => [
            'App\Listeners\Admin\DepositApproval'
        ],
        'App\Events\Employer\DepositSubmited' => [
            'App\Listeners\Employer\SMSAdminDepositSubmited',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
