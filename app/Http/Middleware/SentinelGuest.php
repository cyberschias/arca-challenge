<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelGuest
{
    public function handle($request, Closure $next)
    {
        if (Sentinel::check()) {
            return \Redirect::to('dashboard/login');
        }

        return $next($request);
    }
}
