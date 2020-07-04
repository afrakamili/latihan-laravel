<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function store($pertanyaan_id, Request $request){
        $new_jawaban = JawabanModel::save($request->all());
        return redirect('/pertanyaan');
    }

    public function index($pertanyaan_id){
        $jawaban = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        
        return view('forum.jawaban', compact('jawaban'));
    }
}
