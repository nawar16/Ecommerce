<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;


class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard('auth:admin')->check()) {
            dd(':(((((');
            return redirect('admin/login');
            //redirect(RouteServiceProvider::HOME);
            //Redirect::route('login');
        }
        //else{
            
        //}

        return $next($request);
    }*/
    public function handle($request, Closure $next = null, $guard = null) {
        
            if (!Auth::guard($guard)->check()) {
                return redirect('admin/login');
            } else {
                return $next($request);
            }
	}
}

