@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar User</h1>

    <div class="mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User Baru</a>
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
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    @if(Auth::user()->id !== $user->id)
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    @else
                        <button class="btn btn-sm btn-danger" disabled>Hapus (Tidak Bisa Hapus Akun Sendiri)</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
