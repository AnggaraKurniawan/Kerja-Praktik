<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\berita; // Tambahkan baris ini
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        $beritas = Berita::latest()->take(3)->get(); // Ambil 3 berita terbaru
        return view('partials.home', compact('testimonis', 'beritas'));
    }

    public function about()
    {
        return view('partials.about');
    }
}
