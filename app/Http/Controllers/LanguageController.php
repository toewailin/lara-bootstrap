<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        if (in_array($lang, ['en', 'my', 'ko'])) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
