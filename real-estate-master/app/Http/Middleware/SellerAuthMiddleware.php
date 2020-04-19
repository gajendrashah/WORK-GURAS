<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SellerAuthMiddleware
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
        if (Auth::user()->user_type == 'seller') {
            if(Auth::user()->email_verified == 0) {
                return \redirect()->route('account.email-varification');
            }

            return $next($request);
        }

        return \redirect()->route('login');
    }
}
