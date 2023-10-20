<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // role, rules, curriculum
        $array = [
            "Bangladesh",
            "India",
            "Saudi Arabia",
            "Africa",
            "New Zealand",
            "Canada",
            "Dubai"
        ];
        if (in_array($request->c, $array)) {
            return $next($request);
        }

        return redirect()->to("/");
    }
}
