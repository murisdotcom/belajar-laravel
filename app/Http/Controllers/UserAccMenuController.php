<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccMenu;
use Yajra\Datatables\Datatables;

class UserAccMenuController extends Controller
{
    public function userAccMenu(){

        $userAccMenu=UserAccMenu::all();

        return view('adm.userAccMenu', compact('userAccMenu'),[
            "title"=>"User Acces Menu",
            "active"=>"userAccMenu"
        ]);
    }

    public function jsonUserAccMenu(){
        $userAccMenu=UserAccMenu::all();

        return DataTables::of($userAccMenu)
        ->addColumn('noUrut',function($userAccMenu){
            static $index=1;
            return $index++;
        })
        ->addColumn('action',function($userAccMenu){
            $action='<a href="#" class="btn btn-sn btn-warning">Edit</a>
            <a href="#" class="btn btn-sn btn-danger">Delete</a>';
            return $action;
        })
        ->toJson();
    }
}
