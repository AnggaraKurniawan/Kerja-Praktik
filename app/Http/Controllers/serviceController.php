<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'user') {
            $services = Service::where('id_user', $user->id)->latest()->paginate(10);
        } else {
            $services = Service::latest()->paginate(10);
        }

        return response()->view('services.index', compact('services'));
    }

    public function service()
    {
        $services = Service::latest()->take(3)->get(); // Retrieve all services with pagination
        return response()->view('partials.service', compact('services')); // Send data to view
    }

    public function waste()
    {
        $services = Service::where('status', 1)->latest()->take(6)->get(); // Retrieve all services with pagination
        return response()->view('partials.waste', compact('services')); // Send data to viewSend data to view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('services.create'); // Display create form
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_acara' => 'nullable|date',
            'perkiraan_peserta' => 'nullable|string|max:255',
        ]);

        // Handling image upload
        $gambarPath = $request->file('gambar')->store('service-images', 'public'); // Store in storage/app/public/service-images


        Service::create([
            'id_user' => Auth::id(),
            'gambar' => $gambarPath,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_acara' => $request->tanggal_acara,
            'perkiraan_peserta' => $request->perkiraan_peserta,
            'status' => '0', // Sertakan status di sini
        ]);

        return redirect()->route('services.index')->with('success', 'Service successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return response()->view('services.show', compact('service')); // Show service details
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return response()->view('services.edit', compact('service')); // Display edit form
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_acara' => 'nullable|date',
            'perkiraan_peserta' => 'nullable|string|max:255',

        ]);

        $gambarPath = $service->gambar; // Default to existing image

        if ($request->hasFile('gambar')) {
            try {
                // Delete old image if exists
                if ($service->gambar) {
                    Storage::disk('public')->delete($service->gambar);
                }

                // Store new image
                $gambarPath = $request->file('gambar')->store('service-images', 'public');

            } catch (\Exception $e) {
                // If image upload/deletion fails, rethrow the exception
                throw $e;
                // Optionally, you could log the error and return a user-friendly message
            }
        }

        $service->update([
            'gambar' => $gambarPath,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_acara' => $request->tanggal_acara,
            'perkiraan_peserta' => $request->perkiraan_peserta,
            'status' => $request->status,
        ]);

        return redirect()->route('services.index')->with('success', 'Service successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Service $service)
    {
        if ($service->gambar) {
            Storage::disk('public')->delete($service->gambar); // Delete image from storage
        }
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service successfully deleted!');
    }
}
