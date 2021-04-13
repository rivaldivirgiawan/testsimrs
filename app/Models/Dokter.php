<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = ['nama','email', 'spesialis', 'poliklinik_id','user_id'];


	public function poliklinik()
	{
		return $this->belongsTo(Poliklinik::class, 'poliklinik_id', 'id');
	} 

}