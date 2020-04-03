<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckIsActive
{
    public function __construct()
    {
        
    }

    public function handle($request, Closure $next)
    {
        if (Auth::user()->isAdmin() || Auth::user()->isActive) {
            return $next($request);
        }

        // throw new AuthorizationException('You do not have permission to view this page');
        $name = Auth::user()->name;
        echo "<h1>{$name} votre compte compte est pas encore activé par administration</h1>";
    }
}
