<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Is_admin
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
          // dd(Auth::user()->role); 
        if ( Auth::check() && Auth::user()->role_id == 1 )
    {
        // dd('i am admin');
        return $next($request);
    }

    return redirect('/');
        
    }
}
