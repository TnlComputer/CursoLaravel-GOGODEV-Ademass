<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/search', [UserController::class, 'search'])->name('search-get');
Route::post('/search', [UserController::class, 'searchPost'])->name('search');