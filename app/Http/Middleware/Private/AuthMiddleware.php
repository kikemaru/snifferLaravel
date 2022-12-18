<?php

namespace App\Http\Middleware\Private;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
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
        if (!empty(auth()->user()->role)) {
            if (auth()->user()->role !== 1) {
                return redirect()->route('home');
            } else {
                return $next($request);
            }
        } else {
            return to_route('home');
        }
    }
}
