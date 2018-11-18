<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
    	$deposits = Deposit::with(['user', 'processor'])->paginate(20);

    	return view('admin.payment.index', compact('deposits'));
    }
}
