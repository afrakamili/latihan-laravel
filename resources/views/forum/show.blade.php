@extends('adminlte.master')

@section('content')
 

  <div class="ml-3 mt-3">
    <h1>Detail Question</h1>
    <a href="/pertanyaan" class="btn btn-primary mb-3">
    Back
    </a>

    <table class="table table-bordered mt-2">
        <thead>                  
          <tr>
            <th style="width: 10px">No</th>
            <th>Judul</th>
            <th>Isi Pertanyaan</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbaharui</th>
            <th>Jawaban</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$pertanyaan->id}}</td>
            <td>{{$pertanyaan->judul}}</td>
            <td>{{$pertanyaan->isi}}</td>
            <td>{{$pertanyaan->tanggal_dibuat}}</td>
            <td>{{$pertanyaan->tanggal_diperbaharui}}</td>
            <td>
              @foreach($jawabans as $key => $jawabans)
                <p>{{$key+1 . ". ". $jawabans->isi }}</p>
              @endforeach
            </td>
          
          </tr>
          
        </tbody>
    </table>
  </div>
@endsection