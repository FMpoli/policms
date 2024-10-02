<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Detit\Polipages\Http\Controllers\PageController;
use Detit\Polipeople\Http\Controllers\TeamController;
use Detit\Polipeople\Http\Controllers\MemberController;

Route::get('/', [PageController::class, 'show'])->name('home');

Route::get('/people', [TeamController::class, 'index'])->name('team.index');
Route::get('/people/{slug?}', [MemberController::class, 'show'])->name('people.show');
Route::get('/people/c/{slug?}', [TeamController::class, 'index'])->name('team.show');

Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');

Route::get('locale/{locale}', [LocalizationController::class, 'setLanguage'])->name('locale');
