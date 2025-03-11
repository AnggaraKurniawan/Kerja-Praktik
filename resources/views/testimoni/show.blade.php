@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail Testimoni</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $testimoni->nama }}</h2>
                <p class="card-text">{{ $testimoni->testimoni }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
