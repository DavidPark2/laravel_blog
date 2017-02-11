<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.form');
    }

//    public function store()
//    {
//        User::create([
//
//        ]);
//    }
}
