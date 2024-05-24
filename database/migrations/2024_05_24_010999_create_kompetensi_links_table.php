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
        Schema::create('kompetensi_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panduan_asesmen_mandiris_id')->constrained('panduan_asesmen_mandiris')->cascadeOnDelete();
            $table->string('kriteria_untuk_kerja')->nullable();
            $table->string('benchmark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kompetensi_links');
    }
};
