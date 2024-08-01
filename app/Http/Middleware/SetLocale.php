<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Ottieni il locale dal segmento dell'URL
        $locale = $request->segment(1);

        // Verifica se il locale è valido, altrimenti usa il locale della sessione o quello di default
        if (in_array($locale, ['en', 'it'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            // Usa il locale della sessione o quello di configurazione se non è presente nell'URL
            $locale = Session::get('locale', config('app.locale'));
            App::setLocale($locale);
        }

        return $next($request);
    }
}
