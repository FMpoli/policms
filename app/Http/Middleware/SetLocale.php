<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Use the locale from the session or the default locale from the configuration
        $locale = Session::get('locale', config('app.locale'));
        Log::info('Locale: ' . $locale);
        // Ensure the locale is valid
        if (!in_array($locale, ['en', 'it'])) {
            $locale = config('app.locale');
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
