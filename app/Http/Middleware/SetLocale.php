<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Récupère la première partie de l'URL pour la langue (par exemple 'fr' ou 'en')
        $locale = $request->segment(1);

        // Si la langue est valide, change la langue de l'application
        if (in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}

