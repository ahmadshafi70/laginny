<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Is_user
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
    
    if ( Auth::check() && Auth::user()->role == 2 )
    {

        dd('i am user');
        return $next($request);
    }

    return redirect('/admin');



    }
        
    }
}
