<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class authMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $EmailSession = session('email');
        $TokenSession = session('token');

        $user = User::where('email', $EmailSession)->first();
        if ($user && $user->token == $TokenSession) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
