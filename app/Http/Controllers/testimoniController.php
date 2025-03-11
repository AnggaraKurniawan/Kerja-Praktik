<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan import ini
use Illuminate\Http\Response;
use Illuminate\View\View;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response // Ubah void menjadi Response
    {
        $user = Auth::user();

        if ($user->role == 'user') {
            $testimonis = Testimoni::where('nama', $user->name)->latest()->paginate(10);
        } else {
            $testimonis = Testimoni::latest()->paginate(10);
        }

        return response()->view('testimoni.index', compact('testimonis')); //Pastikan return ini selalu ada
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        return response()->view('testimoni.create');
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
            'nama' => 'required|string|max:255',
            'testimoni' => 'required|string',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'testimoni' => $request->testimoni,
        ]);

        return redirect()->route('testimoni.index')->with('success', 'testimoni berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni): Response
    {
        return response()->view('testimoni.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni): Response
    {
        return response()->view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'testimoni' => 'required|string',
        ]);

        $testimoni->update([
            'nama' => $request->nama,
            'testimoni' => $request->testimoni,
        ]);

        return redirect()->route('testimoni.index')->with('success', 'testimoni berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
