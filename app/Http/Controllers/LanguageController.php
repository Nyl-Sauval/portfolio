<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $lang = $request->input('lang'); // Récupère la langue choisie
        Session::put('locale', $lang); // Met à jour la langue dans la session
        App::setLocale($lang); // Change la langue de l'application

        // Redirige vers la page d'accueil ou une route choisie
        return redirect()->back(); // Assure-toi que la redirection va vers la bonne page
    }

}
