<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->segment(1) . '/' . $request->segment(2);
        if (request()->method() == 'GET' && $path != '/') {
            # code... 


            if (is_object(auth()->user())) {
                if (auth()->user()->user_type != 1) {
                    return  user_access($path) ? $next($request) : abort(403);
                }
            }
        }



        return $next($request);
    }
}
