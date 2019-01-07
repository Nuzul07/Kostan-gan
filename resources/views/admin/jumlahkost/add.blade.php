@extends('layouts.adminasdasd')
@section('title')
Tambah Slot Kamar
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Jumlah Kamar</div>
        <div class="card-body">
         <form action="#" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nomor Kamar</label>
            <?php
              $kost = \App\Kamar::all();
            ?>
            <select class="form-control" name="nomorkamar" required>
              <option selected>Pilih Satu</option>
              @foreach($kost as $q)
              <option value="{{$q->nomorkamar}}">{{$q->nomorkamar}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Tipe Kamar</label>
            <input type="text" class="form-control" name="typekamar" id="formGroupExampleInput" 
            placeholder="Tipe Kamar" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Jumlah Kamar</label>
            <input type="text" class="form-control" name="jumlahkamar" id="formGroupExampleInput" 
            placeholder="Jumlah Kamar" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection



