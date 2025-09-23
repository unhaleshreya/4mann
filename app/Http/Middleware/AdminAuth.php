<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Check if admin_id is in session
        if (!$request->session()->has('admin_id')) {
            return redirect()->route('admin.login')->withErrors(['username' => 'Please login first.']);
        }

        return $next($request);
    }
}
