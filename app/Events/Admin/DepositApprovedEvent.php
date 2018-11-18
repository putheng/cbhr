<?php

namespace App\Events\Admin;

use App\Models\Deposit;
use Illuminate\Queue\SerializesModels;

class DepositApprovedEvent
{
    use SerializesModels;

    public $deposit;

    public $comment;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Deposit $deposit, $comment)
    {
        $this->comment = $comment;
        $this->deposit  = $deposit;
    }
}
