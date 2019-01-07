@extends('layouts.app')

@section('content')

<div class="container">
	<form method="POST" action="{{url('/save')}}" enctype="multipart/form-data">
		@csrf
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Nama</label>
	      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="inputPassword4">Umur</label>
	      <input type="text" class="form-control" id="inputPassword4" placeholder="Umur" name="umur">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputAddress">Jenis Kelamin</label>
	    <input type="text" class="form-control" id="inputAddress" placeholder="Jenis Kelamin" name="jeniskelamin">
	  </div>
	  <div class="form-group">
	    <label for="inputAddress2">Nomor Telepon</label>
	    <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Telepon" name="nomortelepon">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	    	<label>Nomor Kamar</label>
	    	<div>
			  <select name="nomorkamar">
			  	<option>1</option>
			  	<option>2</option>
			  	<option>3</option>
			  	<option>4</option>
			  </select>
	    	</div>
	    </div>
	  </div>
	  <div class="form-row">
	  	<div class="form-group col-md-6">
	  		<label>Data Diri</label>
	  		<input type="file" name="gambar" required>
	  	</div>
	  </div>
	  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

@endsection