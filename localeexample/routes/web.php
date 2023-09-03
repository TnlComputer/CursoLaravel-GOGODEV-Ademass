<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [WelcomeController::class, 'index'])->name('example');