<?php

namespace App\Http\Middleware;

use App\Models\Manager;
use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userLevel = Auth::user()?->level;
        // if ($request->has('auth') && $request->auth == 1) {
        if ($request->user()->level==3) {

            return $next($request);
        }return redirect()->route('/unavailable');
    }
}
