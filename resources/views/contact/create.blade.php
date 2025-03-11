@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Kontak Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name ?? old('name') }}" required readonly>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email ?? old('email') }}" required readonly>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group d-flex align-items-center">
                <span class="pr-2">5 + 7 =</span>
                <input type="text" name="captcha" class="form-control" style="max-width:80px;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
