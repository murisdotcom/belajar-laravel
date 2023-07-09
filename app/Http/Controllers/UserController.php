<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Home",
            "active" => "home"
        ]);
    }

    public function users()
    {
        $users=User::all();
        return view('adm.users', compact('users'),[
            "title" => "Users",
            "active" => "Users"
        ]);
    }
}
