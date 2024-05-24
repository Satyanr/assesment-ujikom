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
        Schema::create('panduan_asesmen_mandiris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_sertifikasi_id')->constrained('data_sertifikasis')->cascadeOnDelete();
            $table->foreignId('daftar_unit_kompetensi_id')->constrained('daftar_unit_kompetensis')->cascadeOnDelete();
            $table->string('elemen_kompetensi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panduan_asesmen_mandiris');
    }
};
