<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $roles = explode("|", $role);
        if(!in_array(auth()->user()->role, $roles)){
            abort(404);
        }
        return $next($request);
    }
}
