<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccMenu;

class UserAccMenuController extends Controller
{
    public function userAccMenu(){

        $userAccMenu=UserAccMenu::all();

        return view('adm.userAccMenu', compact('userAccMenu'),[
            "title"=>"User Acces Menu",
            "active"=>"userAccMenu"
        ]);
    }
}
