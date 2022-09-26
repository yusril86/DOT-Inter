<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Jika  login dengan roles admin maka akan ke direct page Admin
        if (Auth::user() && Auth::user()->roles == 'Admin') {
            return $next($request);
       }elseif(Auth::user() && Auth::user()->roles == 'user')    {
            return $next($request);
       }
       return redirect('/');
    }
}
