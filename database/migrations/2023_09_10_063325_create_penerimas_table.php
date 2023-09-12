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
            $table->string('DaerahIrigasi');
            $table->string('Kabupaten');
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->json('names'); 
            $table->string('IrigasiDesaTerbangun');
            $table->string('IrigasiDesaBelumTerbangun');
            $table->string('PolaTanamSaatIni');
            $table->string('JenisVegetasi');
            $table->string('MendapatkanP4_ISDA');
            $table->string('TahunMendapatkan');
            $table->string('peta_pdf')->nullable();
            $table->string('jaringan_pdf')->nullable();
            $table->string('dokumentasi_pdf')->nullable();
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
