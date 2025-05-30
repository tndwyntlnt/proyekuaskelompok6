<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('admin/login') || $request->is('admin/logout')) {
        return $next($request);
        }

        if (auth()->check() && auth()->user()->usertype === 'admin'){
            return $next($request);
        }
        abort(403, 'akses ditolak');
    }
}
