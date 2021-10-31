<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index(){
        return view('regis');
    }
    public function postregis(Request $request){
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        return redirect('/login')->with('sukses','data pendaftaran berhasil disimpan');
    }
}
