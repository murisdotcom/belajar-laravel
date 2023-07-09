<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "title" => "Login",
            "active" => "login"
        ]);
    }

    public function authenticate(Request $request){
        $credentials=$request->validate([
            // "email"=>"required|email:dns",
            "nik"=>"required|min:5|numeric",
            "password"=>"required"
        ],
        [
        "nik.required"=>"nik wajib diisi!",
        "nik.min"=>"minimal nik 5 digit!",
        "nik.numeric"=>"nik harus berupa angka!"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('toast_success','Login berhasil.');
        }

        return back()->with('toast_error','Login gagal!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
         return redirect('/');

    }
}
