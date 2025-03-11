@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Daftar Layanan</h1>
        <div class="mb-3">
            <a href="{{ route('services.create') }}" class="btn btn-primary">Tambah Layanan Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Jadwal Acara</th>
                    <th>Perkiraan Peserta</th>
                    <th>Deskripsi</th>
                    <th>Status</th> <!-- Tambahkan kolom Status -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>
                        @if($service->gambar)
                            <img src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->judul }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>{{ $service->judul }}</td>
                    <td>{{ $service->tanggal_acara }}</td>
                    <td>{{ $service->perkiraan_peserta }}</td>
                    <td>{{ Str::limit($service->deskripsi, 100) }}</td>
                    <td> <!-- Kolom Status -->
                        @if($service->status == 0)
                            Diajukan
                        @elseif($service->status == 1)
                            Terlaksana
                        @else
                            Status Tidak Valid
                        @endif
                    </td>
                    <td>
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus service ini?')">Hapus</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $services->links() }}
    </div>
@endsection
