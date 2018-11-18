<?php

namespace App\Http\Controllers\Admin;


use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WithdrawController extends Controller
{
    function index()
    {
    	$withdraws = Withdraw::with(['user'])->latestFirst()->paginate(20);

    	return view('admin.publisher.withdraw.index', compact('withdraws'));
    }

    public function approve(Request $request, Withdraw $withdraw)
    {
    	dd($request);
    }

    public function cancel(Request $request, Withdraw $withdraw)
    {
    	dd($request);
    }
}
