@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Portofolio</h1>
         <div class="mb-3">
            <a href="{{ route('portofolio.create') }}" class="btn btn-primary">Tambah Portofolio Baru</a>
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
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Sampah Terkumpul</th>
                    <th>jadwal pengangkutan</th>
                    <th>Tanggal Acara</th>
                    <th>Perkiraan Peserta</th>
                     <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portofolios as $portofolio)
                <tr>
                    <td>
                        @if($portofolio->gambar_porto)
                            <img src="{{ asset('storage/' . $portofolio->gambar_porto) }}" alt="{{ $portofolio->judul_porto }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>{{ $portofolio->judul_porto }}</td>
                    <td>{{ $portofolio->sampah_terkumpul }}</td>
                    <td>{{ $portofolio->jadwal_pengangkutan }}</td>
                    <td>{{ $portofolio->tanggal_acara }}</td>
                    <td>{{ $portofolio->perkiraan_peserta }}</td>
                    <td>{{ Str::limit($portofolio->isi, 100) }}</td>
                    <td>
                         <a href="{{ route('portofolio.show', $portofolio->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST" class="d-inline">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus portofolio ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $portofolios->links() }}
    </div>
@endsection
