<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
	protected $fillable = ['keluhan','pemeriksaan','alergiobat','kesimpulan','poliklinik_id','pasien_id'];

    public function pasien()
	{
		return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
	} 

	public function poliklinik()
	{
		return $this->belongsTo(Poliklinik::class, 'poliklinik_id', 'id');
	} 
}
