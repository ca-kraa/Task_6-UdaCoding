<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType === 'admin') {
                return redirect('/dashboard');
            } elseif ($userType === 'user') {
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
