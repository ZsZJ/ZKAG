<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Premium
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

        if ( Auth::check() && Auth::user()->isPremiumUser() == 1 )
        {
            return $next($request);
        }

        // Create message to show current user isn't allowed to access this page

        return redirect(route('login'));
    }
}
