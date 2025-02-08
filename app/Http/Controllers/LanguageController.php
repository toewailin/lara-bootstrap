<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Check if the locale exists
        $locales = ['en', 'my', 'kr'];
        if (in_array($locale, $locales)) {
            // Set the locale and store it in session
            session(['locale' => $locale]);
            app()->setLocale($locale);
        }

        // Redirect back to the previous page or home
        return redirect()->back();
    }
}
