<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ensure the user is logged in
        if (!Auth::check()) {
            return redirect()->route('admin.login'); // or abort(403);
        }

        // Ensure the logged in user is an admin
        // if (Auth::user()->role !== 'admin') {
        //     abort(403, 'Unauthorized access.');
        // }
        
        return $next($request);
    }
}