<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */ 
    public function up(): void
    {
        Schema::create('penerimas', function (Blueprint $table) {
            $table->id();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('DaerahIrigasi')->unique();
            $table->string('names');
            $table->string('IrigasiDesaTerbangun');
            $table->string('IrigasiDesaBelumTerbangun');
            $table->string('PolaTanamSaatIni');
            $table->string('JenisVegetasi');
            $table->string('TahunMendapatkan');
            $table->string('MendapatkanP4-ISDA');
            $table->string('peta_pdf');
            $table->string('jaringan_pdf');
            $table->string('dokumentasi_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimas');
    }
};
