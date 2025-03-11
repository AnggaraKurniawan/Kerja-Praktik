@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Portofolio</h1>

         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="gambar_porto" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar_porto" name="gambar_porto">
                 @if($portofolio->gambar_porto)
                    <img src="{{ asset('storage/' . $portofolio->gambar_porto) }}" alt="{{ $portofolio->judul_porto }}" width="100" class="mt-2">
                 @endif
            </div>
            <div class="mb-3">
                <label for="judul_porto" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul_porto" name="judul_porto" value="{{ $portofolio->judul_porto }}" required>
            </div>
             <div class="mb-3">
                <label for="sampah_terkumpul" class="form-label">Sampah Terkumpul</label>
                <input type="text" class="form-control" id="sampah_terkumpul" name="sampah_terkumpul" value="{{ $portofolio->sampah_terkumpul }}">
            </div>
            <div class="mb-3">
                <label for="jadwal_pengangkutan" class="form-label">jadwal pengangkutan</label>
                <input type="text" class="form-control" id="jadwal_pengangkutan" name="jadwal_pengangkutan" value="{{ $portofolio->jadwal_pengangkutan }}">
            </div>
             <div class="mb-3">
                 <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
                 <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" value="{{ $portofolio->tanggal_acara }}">
            </div>
            <div class="mb-3">
                 <label for="perkiraan_peserta" class="form-label">Perkiraan Peserta</label>
                 <input type="text" class="form-control" id="perkiraan_peserta" name="perkiraan_peserta" value="{{ $portofolio->perkiraan_peserta }}">
            </div>
             <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="5">{{ $portofolio->isi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('portofolio.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
