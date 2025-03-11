<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Import model Berita
use Illuminate\Http\Request;

class detailberitacontroller extends Controller
{
    public function show($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route('detailberita')->with('error', 'Berita tidak ditemukan!');
        }

        return view('partials.single-post', compact('berita'));
    }
}
