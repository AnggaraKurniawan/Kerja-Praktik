@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail Portofolio</h1>

        <div class="card">
            @if($portofolio->gambar_porto)
               <img src="{{ asset('storage/' . $portofolio->gambar_porto) }}" alt="{{ $portofolio->judul_porto }}" class="card-img-top">
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $portofolio->judul_porto }}</h2>
                <p class="card-text"><strong>Sampah Terkumpul:</strong> {{ $portofolio->sampah_terkumpul ?? '-' }}</p>
                <p class="card-text"><strong>Tanggal Acara:</strong> {{ $portofolio->tanggal_acara ?? '-' }}</p>
                 <p class="card-text"><strong>Perkiraan Peserta:</strong> {{ $portofolio->perkiraan_peserta ?? '-' }}</p>
               <p class="card-text">{{ $portofolio->isi }}</p>
            </div>
            <div class="card-footer">
                  <a href="{{ route('portofolio.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
