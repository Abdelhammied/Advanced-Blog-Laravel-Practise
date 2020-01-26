<?php

namespace App\Src\Admin\Http\Middlewares;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        return redirect()->route('admin.login');
    }
}
