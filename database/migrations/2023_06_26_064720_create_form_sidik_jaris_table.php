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
        Schema::create('form_sidik_jaris', function (Blueprint $table) {
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
            $table->string('agama');
            $table->longText('alamat_saat_ini');
            $table->string('no_telp');
            $table->string('email');
            $table->string('status_perkawinan');
            $table->string('nama_ayah');
            $table->longText('alamat_ayah');
            $table->string('nama_ibu');
            $table->longText('alamat_ibu');
            $table->string('nama_istri');
            $table->string('nama_suami');
            $table->string('nama_anak');
            $table->string('verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_sidik_jaris');
    }
};