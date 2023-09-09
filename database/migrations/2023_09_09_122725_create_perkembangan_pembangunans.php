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
        Schema::create('perkembangan_pembangunans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daerah_irigasi_id');
            $table->string('akte_pendiri_pdf');
            $table->string('npwp_pdf');
            $table->string('buku_rekening_pdf');
            $table->string('jenis_pekerjaan');
            $table->string('langsing_material');
            $table->string('jarak_langsir');
            $table->string('beda_tinggi_langsing');
            $table->string('metode_langsir');
            $table->string('kondisi_lokasi');
            $table->string('kondisi_tanah');
            $table->string('potensi_masalah');
            $table->string('tahun_pengerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangan_pembangunans');
    }
};
