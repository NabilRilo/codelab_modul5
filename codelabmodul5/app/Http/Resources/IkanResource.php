<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IkanResource extends JsonResource
{
    // Properti untuk status, pesan, dan data resource
    public $status;
    public $pesan;
    public $resource;

    /**
     * __construct
     *
     * Konstruktor untuk inisialisasi properti.
     *
     * @param mixed $status
     * @param mixed $pesan
     * @param mixed $resource
     * @return void
     */
    public function __construct($status, $pesan, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->pesan = $pesan;
    }

    /**
     * toArray
     *
     * Mengubah data menjadi array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'berhasil' => $this->status,    // Status API, contoh: true/false
            'pesan' => $this->pesan,       // Pesan yang akan ditampilkan
            'data' => $this->resource      // Data ikan (bisa koleksi atau objek tunggal)
        ];
    }
}
