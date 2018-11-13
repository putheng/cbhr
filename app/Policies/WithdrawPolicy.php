<?php

namespace App\Policies;

use App\User;
use App\Models\Withdraw;
use Illuminate\Auth\Access\HandlesAuthorization;

class WithdrawPolicy
{
    use HandlesAuthorization;

    public function touch(User $user, Withdraw $withdraw)
    {
        return $withdraw->ownedByUser($user);
    }
}
