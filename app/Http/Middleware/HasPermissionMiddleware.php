<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class HasPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    // middleware menggunakan permission
    public function handle(Request $request, Closure $next, string $permissions): Response
    {
        

        // if user role = admin or super admin return next
        if (auth()->user()->role->name === 'admin' || auth()->user()->role->name === 'super admin') {
            return $next($request);
        }

        if (!auth()->user() || !$this->userHasAnyPermissions($permissions)) {
            Alert::error('403 
            (this action is unauthorized)');
            return redirect()->route('403');
            
        }

        return $next($request);
    }

    private function userHasAnyPermissions($permissions): bool
    {
            if (auth()->user()->role->hasPermission($permissions)) {
                return true;
            }

        return false;
    }

}