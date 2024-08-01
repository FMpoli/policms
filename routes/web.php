<?php

use session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Detit\Polinews\Http\Controllers\NewsController;
use Detit\Polipages\Http\Controllers\PageController;
use Detit\Polinews\Http\Controllers\CategoryController;

// Route::post('/locale', [LocaleController::class, 'changeLocale'])->name('lang.switch');

// Route::get('/news', [CategoryController::class, 'index'])->name('news.index');
// Route::get('/news/{slug?}', [NewsController::class, 'show'])->name('news.show');
// Route::get('/news/category/{slug?}', [CategoryController::class, 'index'])->name('category.index');


// Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function() {

//     Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
//     // Altre route...
// });

// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/', [PageController::class, 'show'])->name('home');
    Route::get('/news', [CategoryController::class, 'index'])->name('news.index');
    Route::get('/news/{slug?}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/c/{slug?}', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');
// });

Route::get('locale/{locale}', [LocalizationController::class, 'setLanguage'])->name('locale');
