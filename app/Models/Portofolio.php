<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar_porto',  // Tambahkan 'gambar_porto' di sini
        'judul_porto',
        'sampah_terkumpul',
        'jadwal_pengangkutan',
        'tanggal_acara',
        'perkiraan_peserta',
        'isi'
    ];
}
