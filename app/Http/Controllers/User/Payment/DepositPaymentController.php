<?php

namespace App\Http\Controllers\User\Payment;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Employer\DepositSubmited;
use App\Http\Requests\DepositFormRequest;

class DepositPaymentController extends Controller
{
    public function show()
    {
         return view('users.employer.payment.deposit');
    }
    
    public function store(DepositFormRequest $request)
    {
        $deposite = new Deposit;
        
        $deposite->amount = $request->amount;
        $deposite->processor_id = $request->processor;
        $deposite->transaction = $request->transaction;
        
        $deposite->user()->associate($request->user());
        
        $deposite->save();
        
        event(new DepositSubmited($deposite));
        
        return redirect()->route('employer.payment.show')->withSuccess('Congratulations! Payment submited.');
    }
}
