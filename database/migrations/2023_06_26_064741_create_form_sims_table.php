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
        Schema::create('form_sims', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_kecil_alias');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nik');
            $table->string('no_paspor');
            $table->string('pekerjaan');
            $table->string('kebangsaan');
            $table->longText('alamat_saat_ini');
            $table->string('no_telp');
            $table->string('email');
            $table->string('pendidikan_terakhir');
            $table->string('fotokopi_ktp');
            $table->string('sertifikat_mengemudi');
            $table->string('berkacamata');
            $table->string('cacat_fisik');
            $table->string('jenis_permohonan');
            $table->string('gol_sim');
            $table->string('sim_umum');
            $table->string('polda_kedatangan');
            $table->string('lokasi_kedatangan');
            $table->string('hasil_ujian_teori');
            $table->string('hasil_uji_keterampilan_pengemudi');
            $table->string('praktik_satu');
            $table->string('praktik_dua');
            $table->string('verified');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_sims');
    }
};