<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class HasRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, string $role): Response
    // {
    //     if (!auth()->user() || !auth()->user()->hasRole($role)) {
    //         abort(403);
    //     }

    //     // jika middleware admin benar, arahakan ke view admin
    //     // return response()->view('mazer_template.admin.home');

    //     return $next($request);
    // }


    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->user() || !$this->userHasAnyRole($roles)) {
            // abort(403);
            Alert::error('403 
            (this action is unauthorized)');
            return redirect()->back();
        }

        return $next($request);
    }

    private function userHasAnyRole($roles): bool
    {
        foreach ($roles as $role) {
            if (auth()->user()->hasRole($role)) {
                return true;
            }
        }

        return false;
    }

}