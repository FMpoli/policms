<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LocalizationController extends Controller
{
    public function setLanguage(Request $request, $locale)
    {
        // Save the selected language in the session
        Session::put('locale', $locale);

        // Get the URL of the previous page
        $previousUrl = url()->previous();

        // Parse the URL to get the path
        $parsedUrl = parse_url($previousUrl);
        $path = $parsedUrl['path'];

        // Remove the leading slash if it exists
        $path = ltrim($path, '/');

        // If the path is empty, starts with 'admin', or contains '/admin/', redirect to the same URL
        if (empty($path) || strpos($path, 'admin') === 0 || strpos($path, '/admin/') !== false) {
            return redirect($previousUrl);
        }

        // Split the path into segments
        $segments = explode('/', $path);

        // The last segment is likely the slug
        $currentSlug = end($segments);

        // Get the localized slug for the new language
        $localizedSlug = $this->getLocalizedSlug($currentSlug, $locale);

        // Replace the current slug with the localized one in the segments array
        if ($localizedSlug !== $currentSlug && is_string($localizedSlug)) {
            $segments[count($segments) - 1] = $localizedSlug;
        }

        // Reconstruct the path
        $newPath = '/' . implode('/', $segments);

        // Redirect to the new path
        return redirect($newPath);
    }

    private function getLocalizedSlug($currentSlug, $newLocale)
    {
        // Get all tables in the database
        $tables = DB::select('SHOW TABLES');

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];

            // Check if the table has a 'slug' column
            if (Schema::hasColumn($tableName, 'slug')) {
                $item = DB::table($tableName)
                    ->whereRaw("JSON_EXTRACT(slug, '$.*') LIKE ?", ["%$currentSlug%"])
                    ->first();

                if ($item) {
                    $slugs = json_decode($item->slug, true);
                    $currentLocale = array_search($currentSlug, $slugs);

                    if ($currentLocale !== false && isset($slugs[$newLocale])) {
                        return $slugs[$newLocale];
                    }
                }
            }
        }

        // If no translation found, return the current slug
        return $currentSlug;
    }
}
