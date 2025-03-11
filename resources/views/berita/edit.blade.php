@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Berita</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="narator" class="form-label">Narator</label>
                <input type="text" class="form-control" id="narator" name="narator" value="{{ $berita->narator }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $berita->kategori }}" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                @if($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="100" class="mt-2">
                @endif
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ $berita->isi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
