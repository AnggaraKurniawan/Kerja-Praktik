@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Kontak</h1>
    <div class="mb-3">
        <a href="{{ route('contact.create') }}" class="btn btn-primary">Tambah contact Baru</a>
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
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                @if(Auth::user()->role == 'admin' || (Auth::user()->role == 'user' && Auth::user()->email == $contact->email))
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ Str::limit($contact->message, 100) }}</td>
                        <td>
                            @if(Auth::user()->role == 'admin')
                                <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?')">Hapus</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
@endsection
