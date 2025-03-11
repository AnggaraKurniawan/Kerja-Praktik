<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model // Menggunakan Service dengan huruf besar di awal
{
    use HasFactory;
    protected $table = 'testimoni'; // Menggunakan nama tabel yang benar
    protected $fillable = ['id', 'nama', 'testimoni'];
}
