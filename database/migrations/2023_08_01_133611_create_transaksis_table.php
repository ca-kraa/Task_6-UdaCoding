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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('tanggal');
            $table->enum('jenis_barang', ['Elektronik', 'Pakaian', 'Makanan', 'Minuman', 'Buku', 'Alat Tulis', 'Olahraga', 'Perhiasan', 'Furniture', 'Kesehatan']);
            $table->string('jumlah');
            $table->enum('status', ['masuk', 'keluar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
