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
        Schema::create('data_sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_skm')->nullable();
            $table->string('nomor_skema')->nullable();
            $table->enum('Tujuan_Asesmen', ['Sertifikasi', 'Sertifikasi Ulang'])->default('Sertifikasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sertifikasis');
    }
};
