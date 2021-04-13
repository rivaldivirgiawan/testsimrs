<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('notelp');
            $table->string('tgl_lahir');
            $table->string('keluhan');
            $table->string('pemeriksaan');
            $table->string('alergiobat');
            $table->string('kesimpulan');
            $table->increments('poliklinik_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
