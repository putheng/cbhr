<?php

namespace App\Events;

use App\Models\Withdraw;
use Illuminate\Queue\SerializesModels;

class UserWithdraw
{
    use SerializesModels;

    public $withdraw;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Withdraw $withdraw)
    {
        $this->withdraw = $withdraw;
    }

}
