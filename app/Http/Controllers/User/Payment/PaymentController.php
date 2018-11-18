<?php

namespace App\Http\Controllers\User\Payment;

use DB;
use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
    	$deposit = collect($request->user()->deposit()->select('amount', 'processor_id AS processor_id', 'status', 'created_at', 'id AS transaction')->get());
    	$listing = collect($request->user()->listingPayment()->select('amount', 'listing_id AS processor_id', DB::raw('(CASE WHEN updated_at = 0 THEN 0 ELSE 1 END) AS status'), 'created_at', 'id AS transaction')->get());

    	$transactions = $deposit->merge($listing);

        return view('users.employer.payment.index', compact('transactions'));
    }
    
    public function store()
    {
        
    }
}
