<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Yajra\Datatables\Datatables;

class MenuController extends Controller
{
    public function menus(){
        $menus=Menu::all();

        return view('adm.menus', compact('menus'),[
            "title"=>"Menus",
            "active"=>'Menus'
        ]);

    }

    public function jsonMenus(){
        $menus=Menu::all();

        return DataTables::of($menus)
        ->addColumn('noUrut',function($menus){
            static $index=1;
            return $index++;
        })
        ->addColumn('action',function($menus){
            $action='<a href="#" class="btn btn-sn btn-warning">Edit</a>
            <a href="#" class="btn btn-sn btn-danger">Delete</a>';
            return $action;
        })
        ->toJson();

    }
}
