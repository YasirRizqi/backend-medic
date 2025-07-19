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
        Schema::create('data_medis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_riwayat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('nomor_hp');
            $table->text('keluhan');
            $table->text('diagnosa')->nullable();
            $table->text('tindakan')->nullable();
            $table->text('resep_obat')->nullable();
            $table->string('dokter_penanggung_jawab');
            $table->date('tanggal_periksa');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // pasien
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_medis');
    }
};
