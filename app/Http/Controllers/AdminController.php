<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\Penginap;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function indexkamar()
    {
    	return view('admin.kamar.index');
    }

    public function addkamar()
    {
    	return view('admin.kamar.add');
    }

    public function savekamar(Request $r)
    {
    	$n = new Kamar;
    	$n->nomorkamar = $r->input('nomorkamar');
    	$n->typekamar = $r->input('typekamar');
    	$n->jumlahkamar = $r->input('jumlahkamar');
    	$n->gambar = $r->input('gambar');

		$file = $r->file('gambar');
		$filename = $file->getClientOriginalName();
		$r->file('gambar')->move("gambar/", $filename);
		$n->gambar = $filename;
    	$n->save();
    	return redirect(url('admin/kamar'));
    }

    public function editkamar($id)
    {
    	$kamar = Kamar::find($id);
    	return view('admin.kamar.edit')->with('kamar',$kamar);
    }

    public function updatekamar(Request $r)
    {
    	$u = Kamar::find($r->input('id'));
    	$u->nomorkamar = $r->input('nomorkamar');
    	$u->typekamar = $r->input('typekamar');
    	$u->jumlahkamar = $r->input('jumlahkamar');
    	$u->gambar = $r->input('gambar');

    	$file = $r->file('gambar');
		$filename = $file->getClientOriginalName();
		$r->file('gambar')->move("gambar/", $filename);
		$u->gambar = $filename;
    	$u->save();
    	return redirect(url('admin/kamar'));
    }

    public function deletekamar($id)
    {
    	$kamar = Kamar::find('id');
    	$kamar->delete();
    	return redirect(url('admin.index'));
    }

    public function search(Request $r)
    {
    	$nama = $r->nama;
    	$penginap = Penginap::all()->where('nama', 'like', '%'.$nama.'%');
    }
}
