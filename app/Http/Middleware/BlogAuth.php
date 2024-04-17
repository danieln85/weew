<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogAuth
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (! $request->user()) {
            return redirect()->route('login');
        }

        // Verificar si el usuario tiene al menos uno de los roles proporcionados
        foreach ($roles as $role) {
            if ($request->user()->hasRole($role)) {
                return $next($request);
            }
        }

        // Si el usuario no tiene ninguno de los roles proporcionados, lanzar una excepción 403
        abort(403, 'No tienes permiso para acceder a esta página.');
    }
}

