<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id'; // Menggunakan nama tabel yang benar
    protected $fillable = ['id', 'judul', 'narator', 'kategori', 'gambar', 'isi'];
}
