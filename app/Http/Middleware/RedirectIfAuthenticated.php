<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
            switch($guard)
            {
                case 'decideur':
                    if (Auth::guard($guard)->check()) {
                    return redirect()->route('decideur.home');
                    }
                break;

                case 'expert':
                    if (Auth::guard($guard)->check()) {
                     redirect()->route('expert.home');
                    }
                break;

                default:
                    if (Auth::guard($guard)->check()) {
                    return redirect()->route('home');
                    }
            }

        return $next($request);
    }
}
