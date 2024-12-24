<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Memastikan user sudah login dan memeriksa role
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // return response()->json(['error' => 'Maaf, akses halaman ini terbatas.'], 403);
    }
}
