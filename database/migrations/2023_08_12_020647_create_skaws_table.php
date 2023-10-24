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
        Schema::create('skaws', function (Blueprint $table) {
            $table->id();
            $table->string('noreg')->nullable();
            $table->string('nama')->nullable();
            $table->string('nomor')->nullable();
            $table->string('tempat')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('agama')->nullable();
            $table->string('pernikahan')->nullable();
            $table->string('alamat')->nullable();

            $table->string('namaaw')->nullable();
            $table->string('nomoraw')->nullable();
            $table->string('tempataw')->nullable();
            $table->string('tanggalaw')->nullable();
            $table->string('kelaminaw')->nullable();
            $table->string('kewarganegaraanaw')->nullable();
            $table->string('agamaaw')->nullable();
            $table->string('pernikahanaw')->nullable();
            $table->string('alamataw')->nullable();

            $table->string('nomorsurat')->nullable();
            $table->string('tanggalsurat')->nullable();
            $table->string('pukul')->nullable();
            $table->string('tempatmeninggal')->nullable();
            $table->string('tanggalmeninggal')->nullable();
            $table->string('kebumikan')->nullable();

            $table->string('rt')->nullable();
            $table->string('pernyataan')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('ktpaw')->nullable();
            $table->string('kematian')->nullable();
            $table->string('saksi')->nullable();
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
        Schema::dropIfExists('skaws');
    }
};
