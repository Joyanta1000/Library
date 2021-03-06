<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsLoggedIn
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
        if(!Session::has('email')){
            
            return redirect('/admin/alog');
        }
      
        return $next($request);
    }
}
