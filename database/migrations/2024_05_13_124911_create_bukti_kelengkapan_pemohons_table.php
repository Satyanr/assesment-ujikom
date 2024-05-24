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
        Schema::create('bukti_kelengkapan_pemohons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('data_sertifikasi_id')->constrained('data_sertifikasis')->cascadeOnDelete();
            $table->string('syarat')->nullable();
            $table->enum('terpenuhi', ['Ya', 'Tidak'])->default('Tidak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukti_kelengkapan_pemohons');
    }
};
