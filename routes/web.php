<?php

use session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Detit\Polinews\Http\Controllers\NewsController;
use Detit\Polipages\Http\Controllers\PageController;
use Detit\Polipeople\Http\Controllers\TeamController;
use Detit\Polinews\Http\Controllers\CategoryController;
use Detit\Polipeople\Http\Controllers\MemberController;

    Route::get('/', [PageController::class, 'show'])->name('home');

    Route::get('/news', [CategoryController::class, 'index'])->name('news.index');
    Route::get('/news/{slug?}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/c/{slug?}', [CategoryController::class, 'index'])->name('category.index');

    Route::get('/people', [TeamController::class, 'index'])->name('team.index');
    Route::get('/people/{slug?}', [MemberController::class, 'show'])->name('people.show');
    Route::get('/people/c/{slug?}', [TeamController::class, 'index'])->name('team.show');

    Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');

Route::get('locale/{locale}', [LocalizationController::class, 'setLanguage'])->name('locale');
