<?php

namespace App\Events\Admin;

use App\User;
use App\Models\Listing;
use Illuminate\Queue\SerializesModels;

class CompleteListing
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
