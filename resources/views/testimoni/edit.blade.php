@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Testimoni</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $testimoni->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="testimoni" class="form-label">Testimoni</label>
                <textarea class="form-control" id="testimoni" name="testimoni" rows="5" required>{{ $testimoni->testimoni }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
