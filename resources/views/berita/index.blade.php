@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Berita</h1>
        <div class="mb-3">
            <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Berita Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Narator</th>
                    <th>Kategori</th>
                     <th>Gambar</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beritas as $berita)
                <tr>
                    <td>{{ $berita->judul }}</td>
                     <td>{{ $berita->narator }}</td>
                     <td>{{ $berita->kategori }}</td>
                     <td>
                        @if($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                     <td>{{ Str::limit($berita->isi, 100) }}</td>
                    <td>
                        <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                         <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                         </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $beritas->links() }}
    </div>
@endsection
