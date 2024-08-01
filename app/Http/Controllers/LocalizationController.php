<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLanguage(Request $request, $locale)
    {
        // Salva la lingua selezionata nella sessione
        Session::put('locale', $locale);

        // Reindirizza l'utente alla pagina precedente
        return redirect('/');
    }
}
