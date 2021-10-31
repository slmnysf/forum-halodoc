<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Komentar;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index(){
        $forum = Forum::orderBy('created_at','desc')->paginate(10);
        return view('diskusi', compact(['forum']));
    }

    public function create(Request $request){
        $request->request->add(['user_id' => auth()->user()->id]);
        $forum = Forum::create($request->all());
        return redirect()->back()->with('sukses','Diskusi berhasil ditambahkan');
    }

    public function view(Forum $forum){
        return view('komentar',compact(['forum']));
    }

    public function postkomentar(Request $request){
        $request->request->add(['user_id' => auth()->user()->id]);
        $komentar = Komentar::create($request->all());
        return redirect()->back()->with('sukses',"Komentar berhasil ditambahkan");
    }

    public function deletediskusi($id){
        $diskusi = \App\Forum::find($id);
        $diskusi->delete();
        return redirect()->back();
    }

    public function deletekomentar($id){
        $komentar = \App\Komentar::find($id);
        $komentar->delete();
        return redirect()->back();
    }
}
