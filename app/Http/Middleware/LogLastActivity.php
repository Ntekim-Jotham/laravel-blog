<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Closure;

class LogLastActivity
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
        if (Auth::check()) {
            // get user and set last_activity field before handling request
            $user = Auth::user();
            $user->last_activity = Carbon::now();
            $user->save();
        }
        // we have all the info we need for now, let's move on
        return $next($request);
    }
}
