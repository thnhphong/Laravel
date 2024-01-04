<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin
{
    public function handle($request, Closure $next)
    {
        if(auth()->check() && auth()->user()->role === 'admin'){
            return $next($request);
        }
        abort(403, 'Unauthorized action');
    }
}
