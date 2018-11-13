<?php

namespace App\Events\Employer;

use App\Models\Deposit;
use Illuminate\Queue\SerializesModels;

class DepositSubmited
{
    use SerializesModels;

    public $deposit;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Deposit $deposit)
    {
        $this->deposit = $deposit;
    }

}
