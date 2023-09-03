<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('example'); // asi controlamos el middleware en el controlador, si esta bien estructuraro, sino user en el routen
    }
    public function index()
    {
        return response()->json('Hello Word', 200);
    }

        public function noAccess()
    {
        return response()->json('No Access');
    }

}