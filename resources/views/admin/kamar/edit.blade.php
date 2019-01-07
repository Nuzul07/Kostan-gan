@extends('layouts.admin')
@section('title')
Edit Kamar
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit Kamar</div>
        <div class="card-body">
         <form action="{{url('admin/kamar/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Nomor Kamar</label>
            <input type="number" class="form-control" name="nomorkamar" id="formGroupExampleInput" 
            placeholder="Nomor Kamar" value="{{$kamar->nomorkamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Type Kamar</label>
            <input type="text" class="form-control" name="typekamar" id="formGroupExampleInput" 
            placeholder="Type Kamar" value="{{$kamar->typekamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Jumlah Kamar</label>
            <input type="number" class="form-control" name="jumlahkamar" id="formGroupExampleInput" 
            placeholder="Jumlah Kamar" value="{{$kamar->jumlahkamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Picture</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput" 
            placeholder="Picture" value="{{$kamar->gambar}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$kamar->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection