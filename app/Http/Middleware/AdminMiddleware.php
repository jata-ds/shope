<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Redirect;

class AdminMiddleware
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
        // return $next($request);
        if(Auth::check()){
            if(Auth::user()->role != 'admin') return Redirect::to('/login');
            else return $next($request);
        }
        else return Redirect::to('/login');
    }
}
