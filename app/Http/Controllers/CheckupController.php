<?php

namespace App\Http\Controllers;

use App;
use App\Penyakit;
use Illuminate\Http\Request;

class CheckupController extends Controller
{
    public function index(){
        $penyakit = \App\Penyakit::all();
        return view('checkup',['penyakit' => $penyakit]);
    }

    public function penyakit(Penyakit $penyakit){
        return view('penyakit',compact(['penyakit']));
    }

}
