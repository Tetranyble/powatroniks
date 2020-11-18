<?php

namespace App\Http\Middleware;

use Closure;

class RewriteRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request->ip());
        dd($request->headers, $request->getSchemeAndHttpHost(), $request->server('SERVER_NAME'), $_SERVER['SERVER_NAME'], $_SERVER['SERVER_ADDR']);
        return $next($request);
    }
}
