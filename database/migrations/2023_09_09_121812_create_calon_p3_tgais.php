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
        Schema::create('calon_p3_tgais', function (Blueprint $table) {
            $table->id();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('daerah_irigasi')->unique();
            $table->string('nama_gp3a');
            $table->string('tsit_irigasi_terbangun');
            $table->string('tsit_irigasi_belum_terbangun');
            $table->string('pola_tanam_saat_ini');
            $table->string('mendapatkan_p3tgai');
            $table->string('peta_pdf');
            $table->string('jaringan_irigasi_pdf');
            $table->string('dokumen_saluran_irigasi_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_p3_tgais');
    }
};
