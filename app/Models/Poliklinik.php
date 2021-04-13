<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $table = 'poliklinik';
    protected $fillable =  ['kode','nama'];


	public function dokter()
	{
		return $this->hasMany(Dokter::class);
	}

	public function transaksi()
	{
		return $this->hasMany(Transaksi::class);
	}
	

}
