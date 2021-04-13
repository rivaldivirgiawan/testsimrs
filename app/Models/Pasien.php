<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['id','nama','jenis_kelamin','tgl_lahir','alamat','notelp'];

	public function transaksi()
	{
		return $this->hasMany(Transaksi::class);
	} 

}