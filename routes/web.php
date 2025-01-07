<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonyvekController;

Route::get('/', function () {
    return view('index');
});

Route::get('', [KonyvekController::class, 'index']);

