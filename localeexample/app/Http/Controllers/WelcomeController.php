<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $msg = __('welcome.greetings', ['name' => 'Jorge']);
        return view('example', compact('msg'));
    }
}