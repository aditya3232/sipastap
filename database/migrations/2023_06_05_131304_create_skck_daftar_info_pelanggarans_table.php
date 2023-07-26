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
        Schema::create('skck_daftar_pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->string('pelanggaran_apa');
            $table->string('sejauhmana_proseshukumnya');
            $table->foreignId('skck_daftar_diri_id')->constrained('skck_daftar_diris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skck_daftar_pelanggarans');
    }
};