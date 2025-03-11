@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Berita Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

         <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                 <label for="narator" class="form-label">Narator</label>
                <input type="text" class="form-control" id="narator" name="narator" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="" selected disabled>Pilih Kategori</option>
                    <option value="event">Event</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="sampah">Sampah</option>
                </select>
            </div>
             <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" >
            </div>
             <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
             </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
             <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
