<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return Inertia::render('ExampleInertia');
    }
}