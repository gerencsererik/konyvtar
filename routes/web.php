<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonyvekController;

Route::redirect('/', '/konyvek');
Route::get('/konyvek/search', [KonyvekController::class, 'search'])->name('konyvek.search');
Route::post('/konyvek/search', [KonyvekController::class, 'processSearch'])->name('konyvek.process.search');
Route::resource('konyvek', KonyvekController::class);
