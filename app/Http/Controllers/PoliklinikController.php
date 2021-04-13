<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PoliklinikController extends Controller
{
    public function index()
   {
    $poliklinik = \App\Models\Poliklinik::all();

       return view('/poliklinik.index', ['poliklinik' => $poliklinik]);
   }

   public function detail($id)
   {
    $poliklinik = \App\Models\Poliklinik::find($id);
    $transaksi = \App\Models\Transaksi::all();
    $pasien = \App\Models\Pasien::all();
    $dokter = \App\Models\Dokter::all();

       return view('/poliklinik.detail', ['poliklinik' => $poliklinik, 'transaksi' => $transaksi, 'pasien' => $pasien, 'dokter' => $dokter]);
   }

   public function adddokter(Request $request)
   {
    $poliklinik = \App\Models\Poliklinik::all();
   
    $user = new \App\Models\User;
    $user->role  ='dokter';
    $user->name = $request->nama;
    $user->email = $request->email;
    $user->password = bcrypt('rahasia');
    $user->remember_token = Str::random(60);
    $user->save();

    $request->request->add(['user_id' => $user->id]);
    $dokter = \App\Models\Dokter::create($request->all());

       return redirect('/poliklinik');
   }
}