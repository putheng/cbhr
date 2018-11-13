<?php

namespace App\Listeners\Listing;

use App\Models\ListingPayment;
use App\Events\Listing\UserCompletedListingPayment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreUserCompleteListingPayment
{
    /**
     * Handle the event.
     *
     * @param  UserCompletedListingPayment  $event
     * @return void
     */
    public function handle(UserCompletedListingPayment $event)
    {
        $payment = new ListingPayment;
        
        $payment->amount = $event->user->price;
        $payment->user()->associate($event->user);
        $payment->listing()->associate($event->listing);
        
        $payment->save();
    }
}
