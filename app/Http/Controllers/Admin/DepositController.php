<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Admin\DepositApprovedEvent;

class DepositController extends Controller
{
    public function approve(Request $request, Deposit $deposit)
    {
    	if($deposit->status == 'pending' || $deposit->status == 'cancel'){
    		$deposit->user()->increment('usd', $deposit->amount);
    	}

    	$deposit->update(['status' => 'complete']);
        event(new DepositApprovedEvent($deposit, 'Completed'));

    	return back()->withSuccess("Deposit was approved.");
    }

    public function cancel(Request $request, Deposit $deposit)
    {
    	if($deposit->status == 'complete'){
    		$deposit->user()->decrement('usd', $deposit->amount);
    	}

    	$deposit->update(['status' => 'cancel']);
        event(new DepositApprovedEvent($deposit, request()->comment));

    	return back()->withSuccess("Deposit was approved.");
    }
}
