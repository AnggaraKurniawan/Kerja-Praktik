@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detail Layanan</h1>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                @if($service->gambar)
                    <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->judul }}" class="img-fluid mb-3">
                @else
                    <p>Tidak ada gambar.</p>
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <p>{{ $service->judul }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <p>{{ $service->deskripsi }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Acara</label>
                <p>{{ $service->tanggal_acara ? $service->tanggal_acara : '-' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Perkiraan Peserta</label>
                <p>{{ $service->perkiraan_peserta ? $service->perkiraan_peserta : '-' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <p>
                    @if($service->status == 0)
                        Diajukan
                    @elseif($service->status == 1)
                        Terlaksana
                    @else
                        Status Tidak Valid
                    @endif
                </p>
            </div>
        </div>

        <div class="card-footer">
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
