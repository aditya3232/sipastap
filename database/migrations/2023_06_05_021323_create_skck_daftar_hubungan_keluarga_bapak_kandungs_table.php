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
        Schema::create('skck_daftar_bapaks', function (Blueprint $table) {
            $table->id();
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
            $table->foreignId('skck_daftar_diri_id')->constrained('skck_daftar_diris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skck_daftar_bapak');
    }
};