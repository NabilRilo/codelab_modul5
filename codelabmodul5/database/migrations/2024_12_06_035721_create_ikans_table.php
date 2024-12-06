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
        Schema::create('ikan', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('gambar')->nullable(); // Kolom untuk menyimpan gambar, bisa kosong
            $table->string('nama'); // Nama ikan
            $table->decimal('panjang', 10, 2)->nullable(); // Panjang ikan dalam satuan tertentu, bisa kosong
            $table->string('spesies'); // Jenis ikan (misal: air tawar, air laut)
            $table->decimal('berat', 10, 2)->default(0); // Berat ikan dalam satuan tertentu, default 0
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikan'); // Menghapus tabel ikan jika rollback
    }
};
