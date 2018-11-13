<?php

namespace App\Events\Listing;

use App\User;
use App\Models\Listing;
use Illuminate\Queue\SerializesModels;

class UserCompletedListingPayment
{
    use SerializesModels;

    public  $listing,
            $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Listing $listing)
    {
        $this->user = $user;
        
        $this->listing = $listing;
    }

}
