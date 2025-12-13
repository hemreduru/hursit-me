<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (! in_array($locale, ['en', 'tr'])) {
            abort(400);
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        $previousUrl = url()->previous();
        $parsedUrl = parse_url($previousUrl);

        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            // Remove locale parameter if it exists (cleaning up old URLs)
            if (isset($queryParams['locale'])) {
                unset($queryParams['locale']);

                $newQuery = http_build_query($queryParams);
                $newUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
                if (isset($parsedUrl['port'])) {
                    $newUrl .= ':' . $parsedUrl['port'];
                }
                $newUrl .= $parsedUrl['path'] ?? '';
                if ($newQuery) {
                    $newUrl .= '?' . $newQuery;
                }

                return redirect($newUrl);
            }
        }

        return redirect()->back();
    }
}
