<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\Datatables\Datatables;

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

    public function jsonUsers()
    {
        $users=User::all();
        return DataTables::of($users)
        ->addColumn('noUrut',function($users){
            static $index=1;
            return $index++;
        })
        ->addColumn('action',function($users){
            $action='<a href="#" class="btn btn-sn btn-warning">Edit</a>
            <a href="#" class="btn btn-sn btn-danger">Delete</a>';
            return $action;
        })
        ->toJson();
    }
}
