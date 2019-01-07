<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Penginap;

class PenginapController extends Controller
{
    public function save(Request $r)
    {
    	$nama = $r->nama;
    	$umur = $r->umur;
    	$jeniskelamin = $r->jeniskelamin;
    	$nomortelepon = $r->nomortelepon;
    	$nomorkamar = $r->nomorkamar;
    	$gambar = $r->gambar;

    	$penginap = new Penginap;
    	$penginap->nama = $nama;
    	$penginap->umur = $umur;
    	$penginap->jeniskelamin = $jeniskelamin;
    	$penginap->nomortelepon = $nomortelepon;
    	$penginap->kamars_id = $nomorkamar;

    	$file = $r->file('gambar');
    	$filename = $file->getClientOriginalName();
    	$r->file('gambar')->move("gambar/", $filename);
    	$penginap->gambar = $filename;
    	$penginap->save();

    	return redirect()->back();
    }

    public function all()
    {
    	$penginap = Penginap::all();

    	return view('penginap', compact('penginap'));
    }

    public function edit($id)
    {
    	$penginap = Penginap::all()->where('id', $id);

    	return view('penginap', compact('penginap'));
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$nama = $r->nama;
    	$umur = $r->umur;
    	$jeniskelamin = $r->jeniskelamin;
    	$nomortelepon = $r->nomortelepon;

    	$penginap = Penginap::find($id);
    	$penginap->nama = $nama;
    	$penginap->umur = $umur;
    	$penginap->jeniskelamin = $jeniskelamin;
    	$penginap->nomortelepon = $nomortelepon;
    	$penginap->save();

    	return redirect()->back();
    }

    public function delete($id)
    {
    	$penginap = Penginap::find($id);
    	$penginap->delete();

    	return redirect()->back();
    }

    public function search(Request $r)
    {
    	$nomorkamar = $r->nomorkamar;
    	$penginap = Penginap::all()->where('nomorkamar', 'like', '%'.$nomorkamar.'%');

    	return redirect($nomorkamar);
    }
}
