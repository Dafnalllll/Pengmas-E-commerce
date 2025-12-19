<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;

class TrackPageView
{
    public function handle(Request $request, Closure $next)
    {
        // Simpan page view ke database
        PageView::create([
            'page_url'    => $request->url(),
            'page_title'  => $request->route() ? $request->route()->getName() : 'Unknown',
            'ip_address'  => $request->ip(),
            'user_agent'  => $request->userAgent(),
            'referer'     => $request->headers->get('referer'),
            'viewed_at'   => now(),
        ]);

        return $next($request);
    }
}
