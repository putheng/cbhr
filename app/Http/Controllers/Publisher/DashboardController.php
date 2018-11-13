<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->user()->post;
        $posts = new Post;
        
        return view('publisher.index', compact('post', 'posts'));
    }
    
    public function profile()
    {
        return view('publisher.setting.profile');
    }
    
    public function store(Request $request)
    {
        $check = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|min:9|max:11',
        ]);
        
        $request->user()->update([ 'name' => $request->name ]);
        
        $request->user()->publisher()->update(['phone' => $request->phone]);

        return back()->withSuccess('Account detail updated.');
    }
}
