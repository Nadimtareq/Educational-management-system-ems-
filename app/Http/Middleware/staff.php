<?php

namespace App\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class staff
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
        if ($user = Sentinel::getUser())
        {
            if ($user->inRole('staff'))
            {
                return $next($request);
            }
        }

        Session::flash('info','You are not allowed');
       return Redirect::back();
    }
}
