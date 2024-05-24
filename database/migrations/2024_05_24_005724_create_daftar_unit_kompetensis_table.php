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
        Schema::create('daftar_unit_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_sertifikasi_id')->constrained('data_sertifikasis')->cascadeOnDelete();
            $table->string('kode_unit_kompetensi')->nullable();
            $table->string('judul_unit_kompetensi')->nullable();
            $table->string('jenis_standar')->nullable();
            $table->enum('jenis_unit', ['Kompetensi Umum dan Inti', 'Kompetensi Pilihan/Fungsional'])->default('Kompetensi Umum dan Inti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_unit_kompetensis');
    }
};
