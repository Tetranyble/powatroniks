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
        //dd($request);
        dd(request()->headers->get('referer'));
        return $next($request);
    }
}
