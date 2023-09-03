<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MailController::class, 'index'])->name('index');
Route::get('/mailme', [MailController::class, 'mailMe'])->name('mailMe');