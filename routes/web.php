<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('homepage');
Route::get('/rules', [PublicController::class, 'rules'])->name('rules');
