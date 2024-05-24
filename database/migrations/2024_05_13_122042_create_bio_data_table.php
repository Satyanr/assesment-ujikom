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
        Schema::create('bio_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('jenis_kartu_identitas')->nullable();
            $table->string('nis')->nullable();
            $table->string('tanggal_habis_kartu_identitas')->nullable();
            $table->string('provinsi_lahir')->nullable();
            $table->string('kota_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('kelas_paket_keahlian')->nullable();
            $table->string('kebangsaan')->nullable();
            $table->string('noktp_nik_passport')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio_data');
    }
};
