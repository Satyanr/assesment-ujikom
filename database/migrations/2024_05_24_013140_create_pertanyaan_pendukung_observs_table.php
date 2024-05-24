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
        Schema::create('pertanyaan_pendukung_observs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daftar_unit_kompetensi_id')->constrained('daftar_unit_kompetensis')->cascadeOnDelete();
            $table->string('pertanyaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_pendukung_observs');
    }
};
