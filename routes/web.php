<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'my', 'ko'])) {
        abort(400);
    }
    App::setLocale($locale);
    $locale = App::currentLocale();
    dd($locale);
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

});

require __DIR__ . '/auth.php';
