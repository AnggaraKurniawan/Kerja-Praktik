@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Testimoni</h1>
         <div class="mb-3">
             <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Tambah Testimoni</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Testimoni</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonis as $testimoni)
                <tr>
                    <td>{{ $testimoni->nama }}</td>
                    <td>{{ Str::limit($testimoni->testimoni, 100) }}</td>
                    <td>
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-sm btn-warning">Edit</a>
                         <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">Hapus</button>
                                @endif
                            </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $testimonis->links() }}
    </div>
@endsection
