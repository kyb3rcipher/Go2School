<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role) {
        if (Auth::check() && Auth::user()->getTable() === $role . 's') {
            return $next($request);
        }
        return redirect('/login')->withErrors(['access' => 'Unauthorized.']);
    }
}
