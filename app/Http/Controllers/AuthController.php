<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/beranda');
    }
}
