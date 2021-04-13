<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
	public function index()
	{
		$pasien = \App\Models\Pasien::all();
		$transaksi = \App\Models\Transaksi::all();
		$poliklinik = \App\Models\Poliklinik::all();

		return view('transaksi.index',['transaksi' => $transaksi, 'pasien' => $pasien, 'poliklinik' =>$poliklinik]);	
	}

	public function addrm(Request $request)
    {
      
      $transaksi = \App\Models\Transaksi::create($request->all());
      $pasien = \App\Models\Pasien::all();
      $data_pasien = \App\Models\Pasien::find($request->all());
      $poliklinik = \App\Models\Poliklinik::all();
    
      return redirect('/dashboard')->with('sukses','Data Berhasil diinput');

    }

	
}