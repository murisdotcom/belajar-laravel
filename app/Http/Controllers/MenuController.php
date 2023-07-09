<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function menus(){
        $menus=Menu::all();

        return view('adm.menus', compact('menus'),[
            "title"=>"Menus",
            "active"=>'Menus'
        ]);

    }
}
