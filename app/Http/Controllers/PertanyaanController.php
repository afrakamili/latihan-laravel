<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('forum.pertanyaan.form');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('forum.pertanyaan.index', compact('pertanyaan'));
    }

    public function store(Request $request){
        $new_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }
}
