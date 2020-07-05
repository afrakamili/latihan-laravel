<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

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

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawabans = JawabanModel::find_by_pertanyaan_id($id);
        return view('forum.show', compact('pertanyaan','jawabans'));
    }

    public function edit ($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('forum.pertanyaan.edit', compact('pertanyaan'));
    }

    public function update ($id, Request $request){
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy ($id){
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}

