<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Publisher\WithdrawFormRequest;

class PaymentController extends Controller
{
    public function index()
    {
        return view('publisher.withdraw.request');
    }
    
    public function store(WithdrawFormRequest $request)
    {
        $request->user()->withdraw()->create([
            'amount' => $request->amount,
            'processor' => $request->processor,
        ]);
        
    }
    
    public function show(Request $request)
    {
        $withdraws = $request->user()->withdraw()
        ->status('pending')->latestFirst()->paginate(15);
        
        return view('publisher.withdraw.pending', compact('withdraws'));
    }
    
    public function destroy(Withdraw $withdraw)
    {
        $this->authorize('touch', $withdraw);
        
        $withdraw->delete();
        
        return back()->withSuccess('Payment request was cancel.');
    }
    
    public function transaction(Request $request)
    {
        $withdraws = $request->user()->withdraw()->withTrashed()->latestFirst()->paginate(15);
        
        return view('publisher.withdraw.transaction', compact('withdraws'));
    }
}
