<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memastikan user sudah login dan memeriksa role 'seller'
        if (Auth::check() && Auth::user()->role === 'seller') {
            return $next($request);
        }

        // Jika bukan seller, kirimkan response 403 Forbidden
        return response()->json(['error' => 'Maaf, akses halaman ini terbatas.'], 403);
    }
}
