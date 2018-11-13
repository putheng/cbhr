<?php

namespace App\Rules;

use App\Models\Deposit;
use Illuminate\Contracts\Validation\Rule;

class DepositTransactionExists implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $deposit = Deposit::pending()->currentUser()->where(function($query){
            $query->where('processor_id', request()->processor)
            ->where('transaction', request()->transaction);
        });
        
        return $deposit->count() ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This transaction is already exists.';
    }
}
