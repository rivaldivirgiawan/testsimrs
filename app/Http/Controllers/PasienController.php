<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_pasien = \App\Models\Pasien::where('nama','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_pasien = \App\Models\Pasien::all();
            $transaksi =\App\Models\Transaksi::all();
            

    	}
            $poliklinik = \App\Models\Poliklinik::all();
	    	return view('pasien.index',['data_pasien'=> $data_pasien, 'poliklinik' => $poliklinik]);
    }

    public function create( Request $request)
    {
    	$pasien = \App\Models\Pasien::create($request->all());
    	return redirect('/pasien')->with('sukses','Data Berhasil diinput');
    }

    public function edit($id)
    {
    	$pasien = \App\Models\Pasien::find($id);
        $data_poliklinik = \App\Models\Poliklinik::all();
        $poliklinik = \App\Models\Poliklinik::all();

    	return view('/pasien/edit',['pasien' => $pasien, 'data_poliklinik' => $data_poliklinik, 'poliklinik' => $poliklinik]);
        
    }

    public function update(Request $request,$id)
    {
    	$pasien = \App\Models\Pasien::find($id);
    	$pasien->update($request->all());
    	return redirect('/pasien')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
    	$pasien = \App\Models\Pasien::find($id);
    	$pasien->delete($pasien);
    	return redirect('/pasien')->with('sukses','Data Berhasil dihapus');

    }

    public function detail($id)
    {
        $pasien = \App\Models\Pasien::find($id);
        $poliklinik = \App\Models\Poliklinik::all();
        $transaksi = \App\Models\Transaksi::all();

        return view('/pasien.detail',['pasien' => $pasien, 'poliklinik' => $poliklinik, 'transaksi' => $transaksi]);
    }


}
