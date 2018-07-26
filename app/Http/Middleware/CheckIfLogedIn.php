<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfLogedIn
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
        if(!auth()->user())
        {
        return redirect('/');
        }
        return $next($request);
    }
}
