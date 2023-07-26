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
        Schema::create('skck_daftar_diris', function (Blueprint $table) {
            $table->id();
            $table->string('kode_daftar_skck_online');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nik');
            $table->string('pekerjaan');
            $table->string('kebangsaan');
            $table->string('status_perkawinan');
            $table->string('agama');
            $table->longText('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('no_passport');
            $table->string('no_kitas_kitap');
            $table->longText('keperluan_skck');
            $table->string('riwayat_sd');
            $table->string('tangggal_lulus_sd');
            $table->string('riwayat_smp');
            $table->string('tangggal_lulus_smp');
            $table->string('riwayat_sma');
            $table->string('tangggal_lulus_sma');
            $table->string('riwayat_s1');
            $table->string('tangggal_lulus_s1');
            $table->string('riwayat_s2');
            $table->string('tangggal_lulus_s2');
            $table->string('riwayat_s3');
            $table->string('tangggal_lulus_s3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skck_daftar_diris');
    }
};