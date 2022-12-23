<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin extends Middleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->isAdmin == 1) {
            return $next($request);
        }
        abort(404);
    }
}
