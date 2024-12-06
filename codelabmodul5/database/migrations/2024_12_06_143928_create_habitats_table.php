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
        Schema::create('habitats', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama habitat
            $table->string('lokasi')->nullable(); // Lokasi habitat
            $table->text('tipe_ikan'); // Jenis ikan
            $table->text('deskripsi')->nullable(); // Deskripsi habitat
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitats');
    }
};
