<?php

namespace App\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SuperadminRole
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
            if ($user->inRole('superadmin') ||$user->inRole('admin') )
            {
                return $next($request);
            }
        }

        Session::flash('danger','You are not allowed');
        return Redirect::back();

    }
}
