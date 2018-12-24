<?php

namespace App\Mail;

use App\Models\{Listing, Apply};
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DirectJobApply extends Mailable
{
    use Queueable, SerializesModels;


    protected $listing;

    protected $apply;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Listing $listing, Apply $apply)
    {
        $this->listing = $listing;

        $this->apply = $apply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Job application')
            ->markdown('emails.listing.apply.direct', [
                'listing' => $this->listing,
                'apply' => $this->apply,
            ]);
    }
}
