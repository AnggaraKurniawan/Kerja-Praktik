<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model // Menggunakan Service dengan huruf besar di awal
{
    use HasFactory;
    protected $table = 'services'; // Menggunakan nama tabel yang benar
    protected $fillable = [
        'id',
        'id_user',
        'gambar',
        'judul',
        'deskripsi',
        'tanggal_acara',
        'perkiraan_peserta',
        'status',];

        protected $attributes = [
            'status' => '0', // Atur nilai default di sini
        ];
}
