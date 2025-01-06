<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', 'fr'); // Récupère la langue de la session, ou 'fr' par défaut
        App::setLocale($locale); // Applique la langue
        return $next($request); // Continue la requête
    }
}
