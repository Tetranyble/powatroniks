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
        dd($request);
        //dd(parse_url(request()->headers->get('referer'), PHP_URL_HOST));
        return $next($request);
    }
}
