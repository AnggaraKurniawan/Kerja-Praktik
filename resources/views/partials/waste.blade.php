@extends('layouts.app')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Layanan Kami</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengelolaan Sampah Acara</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="stats-section" style="background-color: white; padding-top: 80px;">
    <div class="container text-center">
        <h2 class="mb-4">Prestasi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <h2 style="color: #2099ff; font-weight: 900; font-size: 3em;">8</h2>
                <p style="color:#666; font-size:1.1em; font-weight:700;">Klien</p>
            </div>
            <div class="col-md-2">
                <h2 style="color: #ff6a6a; font-weight: 1000; font-size: 3em;">22.104 Kg</h2>
                <p style="color:#666; font-size:1.1em; font-weight:700;">Sampah Terkumpul</p>
            </div>
            <div class="col-md-2">
                <h2 style="color: #32CD32; font-weight: 900; font-size: 3em;">300</h2>
                <p style="color:#666; font-size:1.1em; font-weight:700;">Pohon</p>
            </div>
        </div>
        <h2 class="mb-4 mt-5">Layanan Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Konsultasi</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Perizinan</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Konsumsi</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Desain</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Perlengkapan</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Runner</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Workshop</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Dekorasi</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Kaos/Baju</p>
                    </div>
                    <div class="item text-center" style="margin: 65px;">
                        <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklissss-1.png" style="max-width: 3em; display:block; margin-bottom: 65px; margin-left: auto; margin-right: auto;">
                        <p style="color:#666; font-size:1.3em">Produk Recyclce</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio section-sm" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- Section title -->
                <div class="title text-center">
                    <h2>Portofolio</h2>
                    <p>Berikut adalah daftar portofolio kami.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">
            @forelse ($services as $service)
                @if($service->status == 1)
                    <!-- Single portfolio item -->
                    <div class="col-md-6 mb-4">
                        <div class="portfolio-item">
                            <div class="portfolio-image" style="height: 300px; width: 500px; overflow: hidden; display:flex; align-items: center; justify-content: center;">
                                @if($service->gambar)
                                    <img loading="lazy" src="{{ asset('storage/' . $service->gambar) }}" alt="{{ $service->judul }}" class="img-fluid" style="width: 100%;">
                                @else
                                    <img loading="lazy" src="{{ asset('fe/images/default.png') }}" alt="Default Image" class="img-fluid" style="width: 100%;">
                                @endif
                            </div>
                            <br>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title">
                                    {{ $service->judul }}
                                </h3>
                                <ul class="portfolio-details">
                                    <li>
                                        <i class="tf-ion-checkmark-round" style="font-size: 1.2em;"></i> 📅 Tanggal Acara : {{ $service->tanggal_acara ? date('Y', strtotime($service->tanggal_acara)) . '- Sekarang' : '2023-Sekarang' }}
                                    </li>
                                    <li>
                                        <i class="tf-ion-checkmark-round" style="font-size: 1.2em;"></i> ♻️ Sampah Terkumpul : {{ $service->deskripsi }}
                                    </li>
                                    <li>
                                        <i class="tf-ion-ios-leaf" style="font-size: 1.2em;"></i> 👥 Perkiraan Peserta : {{ $service->perkiraan_peserta }} Kg/Bulan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Single portfolio item -->
                @endif
            @empty
                <div class="col-12 text-center">
                    <p>Tidak ada data portofolio.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
