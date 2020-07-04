@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
  <h1>Data Pertanyaan</h1>
  <a href="/pertanyaan/create" class="btn btn-primary mb-3">
  Buat pertanyaan baru
  </a>

  <table class="table table-bordered mt-2">
      <thead>                  
        <tr>
          <th style="width: 10px">No</th>
          
          <th>Pertanyaan</th>
          <th>Detail Jawaban</th>
          <th>Form Jawaban</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($pertanyaan as $key => $pertanyaan)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$pertanyaan->isi}}</td>
          <td>
            <a href="{{url('/jawaban/'.$pertanyaan->id) }}">
              <button class="btn btn-success"> Lihat Jawaban</button>
            </a>
          </td>
          <td>
            <form action="{{ url('/jawaban/' .$pertanyaan->id) }}" method="post">
            @csrf
              <input type="text" name="isi">
              <input hidden name="pertanyaan_id" value="{{$pertanyaan->id}}">
              <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
              <input hidden name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">
              <button type="submit" class="btn btn-success">submit jawaban</button>
            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
  </table>
</div>
@endsection