<?php

namespace App\Observers;

use App\Models\Withdraw;
use App\Events\UserWithdraw;

class WithdrawObservers
{
    
    public function created(Withdraw $withdraw)
    {
        $withdraw->user()->decrement('usd', $withdraw->amount);
    }
    
    public function deleted(Withdraw $withdraw)
    {
        $withdraw->user()->increment('usd', $withdraw->amount);
    }
}