@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Layanan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" accept="image/*">
            @if($service->gambar)
                <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->judul }}" width="100" class="mt-2">
            @endif
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $service->judul }}" required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" required>{{ $service->deskripsi }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
            <input type="date" class="form-control @error('tanggal_acara') is-invalid @enderror" id="tanggal_acara" name="tanggal_acara" value="{{ $service->tanggal_acara }}">
            @error('tanggal_acara')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="perkiraan_peserta" class="form-label">Perkiraan Peserta</label>
            <input type="text" class="form-control @error('perkiraan_peserta') is-invalid @enderror" id="perkiraan_peserta" name="perkiraan_peserta" value="{{ $service->perkiraan_peserta }}">
            @error('perkiraan_peserta')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ganti input textarea dengan select untuk status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Diajukan</option>
                <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Terlaksana</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection