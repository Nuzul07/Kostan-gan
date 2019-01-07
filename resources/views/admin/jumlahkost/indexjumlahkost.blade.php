@extends('layouts.admin')
@section('title')
Jumlah Kamar Dasboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Jumlah Kamar</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nomor Kamar</th>
                  <th>Tipe Kamar</th>
                  <th>Jumlah Kamar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i= 1;
                $jumlahkost = \App\Kamar::all();
                ?>
                @foreach($jumlahkost as $q)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$q->nomorkamar}}</td>
                  <td>{{$q->typekamar}}</td>
                  <td>{{$q->jumlahkamar}}</td>
                  <td>
                   <a href="{{url('admin/jumlahkost/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                     class="btn btn-outline-danger btn-sm">Delete</a>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
           <hr>
           <li class="list-group-item float-right">
            <a href="{{url('admin/jumlahkost/laporan')}}" class="btn btn-outline-success btn-sm">Export Ke PDF</a>
          </li>
          <li class="list-group-item float-left">
            <a href="{{url('admin/jumlahkost/add')}}" class="btn btn-outline-primary btn-sm">Tambah Kamar</a>
          </li>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection



