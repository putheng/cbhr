<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);
        
        if(!$request->user()->hasRole($roles)) {
            return redirect()->to(role_url());
            
        }
        
        return $next($request);
    }
}
