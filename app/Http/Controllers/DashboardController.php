<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
   	$data_poliklinik = \App\Models\Poliklinik::all();
    $poliklinik = \App\Models\Poliklinik::all();
    $data_pasien = \App\Models\Pasien::all();
    $transaksi = \App\Models\Transaksi::all();
   	return view('/dashboards.index',['data_poliklinik' => $data_poliklinik, 'data_pasien' => $data_pasien, 'transaksi' => $transaksi, 'poliklinik' => $poliklinik]);
   }

   public function daftar($id)
    {
        $poliklinik = \App\Models\Poliklinik::find($id);
        return view('/dashboards.daftar',['poliklinik' => $poliklinik]);
        
    }

     public function tambah(Request $request)
    {
      $poliklinik = \App\Models\Poliklinik::create($request->all());
      return redirect('/dashboards')->with('sukses','Data Berhasil diinput');
    }

    public function addpasien(Request $request)
    {

      $pasien = \App\Models\Pasien::create($request->all());
      $data_pasien = \App\Models\Pasien::find($request->all());
  
      return redirect('/dashboard')->with('sukses','Data Berhasil diinput');

    }


}
