@extends('adminlte.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Pertanyaan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan" method= "POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul pertanyaan</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter judul pertanyaan">
      </div>
      <div class="form-group">
        <label for="isi">Isi Pertanyaan</label>
        <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
      </div>
      <input hidden name="tanggal_dibuat" value = "{{\Carbon\Carbon::now()}}">
      <input hidden name="tanggal_diperbaharui" value="{{\Carbon\Carbon::now()}}">
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

@endsection