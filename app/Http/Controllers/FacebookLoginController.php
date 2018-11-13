<?php
namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Models\Publisher;

use Socialite;
use Illuminate\Http\Request;

class FacebookLoginController extends Controller
{
    
    public function login()
    {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function handleLogin()
    {
        $token = Socialite::driver('facebook')->user();

        $user = $token->user;

        $check = User::byEmail($user['email']);

        
        if($check->count()){
            Auth::loginUsingId($check->first()->id, true);
            
            return redirect()->route('publisher.index');
        }
        
        $create = User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'active' => true,
            'usd' => 0,
        ]);

        $create->publisher()->create([
            'facebook_id' => $user['id'],
            'token' => $token->token,
        ]);
        
        $create->giveRoleTo('publisher');
        
        Auth::loginUsingId($create->id, true);
            
        return redirect()->route('publisher.index');

    }
}
