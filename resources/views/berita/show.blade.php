@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>

        <div class="card">
             @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid mb-3">
             @endif
            <div class="card-body">
                 <h2 class="card-title">{{ $berita->judul }}</h2>
                  <p class="card-text">Narator: {{ $berita->narator }}</p>
                 <p class="card-text">Kategori: {{ $berita->kategori }}</p>
                <p class="card-text">{{ $berita->isi }}</p>
            </div>
             <div class="card-footer">
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
             </div>
        </div>
    </div>
@endsection
