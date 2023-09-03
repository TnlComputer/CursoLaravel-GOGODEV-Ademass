<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;

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

Route::get('/', [infoController::class, 'index'] )->name('index');
Route::get('/create',  [infoController::class, 'create']  )->name('create');
Route::post('/store',   [infoController::class, 'store'] )->name('store');