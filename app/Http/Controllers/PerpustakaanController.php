<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
	//
	public function index()
    {
    	$buku = DB::table('buku')->get();

    	return view('index',['buku' => $buku]);
    }
    
    //
    public function tambah(){

    	return view('tambah');

    }
   
   //
    public function action(Request $request)
	{

	DB::table('buku')->insert([
		'id' => $request->id,
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
		'tahun_terbit' => $request->tahun_terbit,
		'pengarang' => $request->pengarang
	]);

	return redirect('/buku');

	}

	//
	public function edit($id)
	{

	$buku = DB::table('buku')->where('id',$id)->get();
	
	return view('edit',['buku' => $buku]);
 
	}

	//
	public function update(Request $request)
	{

	DB::table('buku')->where('id',$request->id)->update([
		'id' => $request->id,
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
		'tahun_terbit' => $request->tahun_terbit,
		'pengarang' => $request->pengarang
	]);
	
	return redirect('/buku');
	}

	//
	public function hapus($id)
	{

	DB::table('buku')->where('id',$id)->delete();

	return redirect('/buku');
	}
}
