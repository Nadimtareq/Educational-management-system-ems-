<?php

namespace App\Http\Middleware;

use Closure;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class AccountantRole
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
            if ($user->inRole('accountant')||$user->inRole('superadmin'))
            {
                return $next($request);
            }
        }

        Session::flash('info','You are not allowed');
        return Redirect::back();
    }
}
