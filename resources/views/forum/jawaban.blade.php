@extends('adminlte.master')

@section('content')
<div class="card ml-3">
  
    <table class="table table-bordered mt-2 ml 3">
      <thead>
        <tr>
          <th>No</th>
          <th>Jawaban</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($jawaban as $key => $jawaban)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$jawaban->isi}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  
    
</div>

@endsection