<?php

namespace App\Http\Controllers\User\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletPaymentController extends Controller
{
    public function show()
    {
        return view('users.employer.payment.wallet');
    }
    
    public function store()
    {
        
    }
}
