<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class Expert
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
        $expert = $request->expert();
 
        if ($expert && $expert->isExpert())
        {
            return $next($request);
        }
        return new RedirectResponse(url('expert/login'));
    }
}
