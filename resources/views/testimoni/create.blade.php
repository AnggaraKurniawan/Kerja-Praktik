@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tambah Testimoni Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('testimoni.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ Auth::user()->name ?? old('nama') }}" required readonly>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="testimoni" class="form-label">Testimoni</label>
                <textarea class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" name="testimoni" rows="5" required>{{ old('testimoni') }}</textarea>
                @error('testimoni')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection