<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class AmLoggedIn
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
        if(!Session::has('user_email')){
            
            return redirect('/user/ulog');
        }
        return $next($request);
    }
}
