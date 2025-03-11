@extends('layouts.app')

@section('content')

  <section class="single-page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Detail Berita</h2>
          <ol class="breadcrumb header-bradcrumb justify-content-center">
            <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Details Part Start -->
  <section class="blog-details section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article class="post">
            <div class="post-image mb-5">
              <img loading="lazy" class="img-fluid w-100" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
            </div>

            <div class="post-content">
              <h3>{{ $berita->judul }}</h3>
              <p>{{ $berita->isi }}</p>
            </div>
  </section>
  <!-- Blog Details Part End -->
