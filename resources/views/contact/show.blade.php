@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail Kontak</h1>

        <div class="card">
            <div class="card-body">
                 <h4 class="card-title">Nama: {{ $contact->name }}</h4>
                <p class="card-text">Email: {{ $contact->email }}</p>
                <p class="card-text">Nomor HP: {{ $contact->phone }}</p>
                <p class="card-text">Pesan: {{ $contact->message }}</p>
            </div>
             <div class="card-footer">
                <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali</a>
             </div>
        </div>
    </div>
@endsection
