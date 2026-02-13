<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\PageView;

class TrackPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only count frontend pages (exclude admin routes)
        if (!str_starts_with($request->path(), 'admin')) {
            $page = $request->path() ?: 'home';
            $view = PageView::firstOrCreate(['page' => $page]);
            $view->increment('views');
        }

        return $response;
    }
}