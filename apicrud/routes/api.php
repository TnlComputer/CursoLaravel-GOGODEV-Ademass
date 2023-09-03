<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


Route::resource('/note', NoteController::class);