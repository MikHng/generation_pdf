<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyUserAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié
        if (!$request->user()) {
            return redirect('/login');
        }

        // Vérifier si l'utilisateur est le seul utilisateur spécifique autorisé
        if ($request->user()->id !== 3) { // Remplacez "1" par l'ID de l'utilisateur spécifique
            abort(403, 'Accès interdit.');
        }

        return $next($request);
    }

    
}
