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
        Schema::create('srkips', function (Blueprint $table) {
            $table->id();
            $table->string('noreg')->nullable();
            $table->string('nama')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('tempat')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('agama')->nullable();
            $table->string('pernikahan')->nullable();
            $table->string('nomor')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();

            $table->string('namaanak')->nullable();
            $table->string('nomoranak')->nullable();
            $table->string('kelaminanak')->nullable();
            $table->string('tempatanak')->nullable();
            $table->string('tanggalanak')->nullable();
            $table->string('alamatanak')->nullable();

            $table->string('rt')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('akte')->nullable();
            $table->string('catatan')->nullable();
            $table->string('status')->nullable();
            $table->string('hasil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('srkips');
    }
};
