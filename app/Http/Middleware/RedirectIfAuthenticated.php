<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {

        if (is_object(Auth::user())) {
            // If the user is authenticated, redirect away from the login page
            return redirect('/'); // Replace '/dashboard' with your desired redirect URL
        }
        return $next($request);
    }
}
