<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $age=33;
        // $users = DB::table('users')->select( DB::raw("SELECT * FROM users WHERE age ='$age'" )) ;
        // $users = User::where('age', '>=', 32)->orderBy('name', 'ASC')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = 'Jorge';
        $user->email = 'demo@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 58;
        $user->address = 'Calle demostracion 123';
        $user->zip_code = '1407';
        $user->save();

       User::create([
        "name" => "Jose",
        "email"=>"josedemo1@demo.com",
        "password" => Hash::make('123456789'),
        "age"=> 32,
        "address"=>"casa de al lado 2",
        "zip_code"=> "1407"
       ]);

       User::create([
        "name" => "Alejandro",
        "email"=>"Aledemo2@demo.com",
        "password" => Hash::make('123456789'),
        "age"=> 32,
        "address"=>"casa de al lado 1",
        "zip_code"=> "1408"
       ]);

       return redirect()->route('user.index');
    }
}