<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class DecideurMiddleware 
{

    protected $exceptRoutes = [
        'decideur'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*** Handle an incoming request.** @param  \Illuminate\Http\Request  $request* @param  \Closure  $next* @return mixed*/
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->role === 'decideur') {
            return $next($request);
        }
        
        return redirect( route('decideur.login'));
    }
    
}
