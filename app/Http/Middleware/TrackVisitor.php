<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip admin, API, and AJAX requests
        if ($request->is('admin/*') || $request->is('api/*') || $request->ajax()) {
            return $next($request);
        }

        // Skip non-GET and static assets
        if (!$request->isMethod('GET')) {
            return $next($request);
        }

        $path = $request->path();
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $skipExt = ['css','js','png','jpg','jpeg','gif','svg','ico','webmanifest','map','woff','woff2','ttf','eot','otf','json','xml'];
        if (in_array(strtolower($ext), $skipExt)) {
            return $next($request);
        }

        $ip = $request->ip();
        $ua = substr($request->header('User-Agent') ?? '', 0, 1000);

        // ✅ Only save if this IP + UA has never been logged before
        $exists = Visitor::where('ip_address', $ip)
            ->where('user_agent', $ua)
            ->exists();

        if (!$exists) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $ua,
                'visited_at' => Carbon::now(),
            ]);
        }

        return $next($request);
    }
}