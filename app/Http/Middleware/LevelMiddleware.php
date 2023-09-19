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
        if ($id = Auth::user()?->id) {
            $test1 = Auth::user();
            $test2 = User::findOrFail(Auth::user()->id);
            $test3 = Manager::findOrFail(Auth::user()->id);

        if (($test2->level == '1')) {
            return $next($request);
        }
    }
        return redirect()->route('unavailable');
    }
}
