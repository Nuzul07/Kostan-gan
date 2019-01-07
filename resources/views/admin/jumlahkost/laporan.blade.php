<title>Rekap Jumlah Kamar</title>
<center>
  <h1>Rekap Daftar Jumlah Kamar</h1>
</center>

@foreach($kost as $q)
<hr>
Nomor Kamar : {{$q->nomorkamar}} <br>
Tipe Kamar : {{$q->typekamar}} <br>
Jumlah Kamar : {{$q->jumlahkamar}} <br>
<hr>
@endforeach