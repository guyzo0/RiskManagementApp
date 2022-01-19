<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class Expert
{
    protected $exceptRoutes = [
        'expert'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->role === 'expert') {
            return $next($request);
        }
        
        return redirect( route('expert.login'));
    }
}
