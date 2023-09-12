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
        Schema::create('progres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id');
            $table->string('TahunPengerjaan'); 
            $table->string('jenisPekerjaan');
            $table->string('langsirMaterial');
            $table->string('jarakLangsir');
            $table->string('bedaLangsir');
            $table->string('metodeLangsir');
            $table->string('KondisiLokasiPekerjaan');
            $table->string('KondisiTanahLokasiPekerjaan');
            $table->string('PotensiMasalahSosial');
            $table->string('TerlampirAktePendirian')->nullable();
            $table->string('TerlampirNPWP')->nullable();
            $table->string('TerlampirBukuRekening')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progres');
    }
};
