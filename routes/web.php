<?php

use session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Detit\Polinews\Http\Controllers\NewsController;
use Detit\Polipages\Http\Controllers\PageController;
use Detit\Polinews\Http\Controllers\CategoryController;

    Route::get('/', [PageController::class, 'show'])->name('home');

    Route::get('/news', [CategoryController::class, 'index'])->name('news.index');
    Route::get('/news/{slug?}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/c/{slug?}', [CategoryController::class, 'index'])->name('category.index');

    Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');

Route::get('locale/{locale}', [LocalizationController::class, 'setLanguage'])->name('locale');
