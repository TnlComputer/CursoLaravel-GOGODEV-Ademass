<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\User;

// use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // tenemos dos paginate y simplePaginate
        // $users = User::paginate(15);
        // return view('index', compact('users'));
        return User::paginate(15);
    }

    public function search()
    {
        return view('search');
    }

    public function searchPost(SearchRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        // ]);

        $users = User::where('name', '%like%', $request->name)->get();
        return view('search-results', compact('users'));
    }
}