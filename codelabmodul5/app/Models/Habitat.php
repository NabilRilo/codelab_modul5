<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',        // Nama habitat
        'lokasi',    // Lokasi habitat
        'tipe_ikan',  // Jenis ikan
        'deskripsi', // Deskripsi habitat
    ];
}
