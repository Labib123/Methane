<?php

namespace App\Http\Middleware;

use Closure;

class checkType
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
        if (!($request->user()->usertype == 'recycler')) {
            return response(view('error.403'), 403);
        }
        return $next($request);
    }
}
