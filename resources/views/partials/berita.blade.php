@extends('layouts.app')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="posts section">
    <div class="container">
        <div class="row">
            <!-- /section title -->
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
            @foreach($beritas as $berita)
            <!-- single blog post -->
            <article class="col-lg-4 col-md-6 mb-4">
                <div class="post-item rounded-item" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <div class="media-wrapper rounded-top" style="overflow:hidden;">
                        <img loading="lazy" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded-top" style="width:100%; aspect-ratio: 16/9; object-fit: cover; object-position: center;">
                    </div>

                    <div class="content p-4">
                         <span class="date-meta d-block text-muted" style="font-size:0.8em;">
                            {{ date('M d, Y', strtotime($berita->created_at)) }} | {{ $berita->kategori }}
                        </span>
                        <h3 class="mt-2">
                            <a href="{{ route('detailberita', ['id' => $berita->id]) }}" style="font-size: 1.2em; color:inherit;">{{ $berita->judul }}</a>
                        </h3>
                        <p class="mt-3" style="color:#666;">{{ Str::limit($berita->isi, 100) }}</p>
                        <a class="btn btn-main mt-3" href="{{ route('detailberita', ['id' => $berita->id]) }}">Read More</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            @endforeach
        </div>
    </div>
</section>
@endsection
