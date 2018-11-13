<?php

namespace App\Http\Controllers\User\Payment;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $deposits = Deposit::with('processor')->fromUser($request->user())->latestFirst()->get();
        
        return view('users.employer.payment.index', compact('deposits'));
    }
    
    public function store()
    {
        
    }
}
