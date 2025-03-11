<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class beritaController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('berita.index', compact('beritas'));
    }

    // Menampilkan 3 berita utama (misalnya untuk homepage)
    public function beritautama()
    {
        $beritas = Berita::latest()->take(3)->get();
        return view('partials.berita', compact('beritas'));
    }

    // Menampilkan form untuk menambahkan berita baru
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan berita baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'narator' => 'nullable|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required|string',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita-images', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'narator' => $request->narator,
            'kategori' => $request->kategori,
            'gambar' => $gambarPath,
            'isi' => $request->isi,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan!');
        }

        return view('berita.show', compact('berita'));
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan!');
        }

        return view('berita.edit', compact('berita'));
    }

    // Memperbarui data berita
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan!');
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'narator' => 'nullable|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4960',
            'isi' => 'required|string',
        ]);

        $gambarPath = $berita->gambar;
        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $gambarPath = $request->file('gambar')->store('berita-images', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'narator' => $request->narator,
            'kategori' => $request->kategori,
            'gambar' => $gambarPath,
            'isi' => $request->isi,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Berita tidak ditemukan!');
        }

        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
