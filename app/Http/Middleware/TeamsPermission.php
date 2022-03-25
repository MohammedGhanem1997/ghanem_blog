<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeamsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!empty(auth()->user())){
            // session value set on login
            setPermissionsTeamId(session('team_id'));
        }
        if(!empty(Auth::gaurd('employee')->user())){
            // session value set on login
            setPermissionsTeamId(session('team_id'));
        }
        return $next($request);
    }
}
