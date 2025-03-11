<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Testimoni; // Import Testimoni model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class portofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::latest()->paginate(10);
        return response()->view('portofolio.index', compact('portofolios'));
    }
    public function portofolioutama()
    {
        $portofolios = Portofolio::latest()->take(3)->get();
        $testimonis = Testimoni::all(); // Fetch testimonials

        return response()->view('partials.portofolio', compact('portofolios','testimonis')); // Pass $testimonis to the view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_porto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_porto' => 'required|string|max:255',
            'sampah_terkumpul' => 'nullable|string|max:255',
            'jadwal_pengangkutan' => 'nullable|string|max:255',
            'tanggal_acara' => 'nullable|date',
            'perkiraan_peserta' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar_porto')) {
            $gambarPath = $request->file('gambar_porto')->store('portofolio-images', 'public');
        } else {
            $gambarPath = null;
        }


        Portofolio::create([
            'gambar_porto' => $gambarPath,
            'judul_porto' => $request->judul_porto,
            'sampah_terkumpul' => $request->sampah_terkumpul,
            'jadwal_pengangkutan' => $request->jadwal_pengangkutan,
            'tanggal_acara' => $request->tanggal_acara,
            'perkiraan_peserta' => $request->perkiraan_peserta,
            'isi' => $request->isi,
        ]);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        return response()->view('portofolio.show', compact('portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return response()->view('portofolio.edit', compact('portofolio'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'gambar_porto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_porto' => 'required|string|max:255',
            'sampah_terkumpul' => 'nullable|string|max:255',
            'jadwal_pengangkutan' => 'nullable|string|max:255',
            'tanggal_acara' => 'nullable|date',
            'perkiraan_peserta' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar_porto')) {
            if ($portofolio->gambar_porto) {
                Storage::disk('public')->delete($portofolio->gambar_porto);
            }
            $gambarPath = $request->file('gambar_porto')->store('portofolio-images', 'public');
        } else {
            $gambarPath = $portofolio->gambar_porto;
        }

        $portofolio->update([
            'gambar_porto' => $gambarPath,
            'judul_porto' => $request->judul_porto,
            'sampah_terkumpul' => $request->sampah_terkumpul,
            'jadwal_pengangkutan' => $request->jadwal_pengangkutan,
            'tanggal_acara' => $request->tanggal_acara,
            'perkiraan_peserta' => $request->perkiraan_peserta,
             'isi' => $request->isi,
        ]);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Portofolio $portofolio)
    {
         if ($portofolio->gambar_porto) {
            Storage::disk('public')->delete($portofolio->gambar_porto);
        }
        $portofolio->delete();
        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus!');
    }
}
