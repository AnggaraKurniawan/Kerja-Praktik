@extends('layouts.app')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Layanan Kami</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Layanan Pengumpulan Sampah</li>
                </ol>
            </div>
        </div>
    </div>

</section>

    <section class="services" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <h2>Layanan Pengumpulan Sampah</h2>
                        <p>Sistem manajemen sampah yang 100% menyeluruh untuk perusahaan, gedung, perumahan, dan pelaku bisnis, bertujuan mengurangi jumlah timbunan sampah yang berakhir di TPA.Bersama Ciroes, kita wujudkan lingkungan yang lebih bersih dan sehat!</p>
                        <div class="border"></div>
                        <a href="http://bit.ly/layananciroes" class="btn btn-primary mt-3" target="_blank">Berlangganan Sekarang </a>
                    </div>
                </div>
                <!-- /section title -->
            </div>
        </div>

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
                @forelse ($portofolios as $portofolio)
                <!-- Single portfolio item -->
                <div class="col-md-6 mb-4">
                    <div class="portfolio-item">
                       <div class="portfolio-image" style="height: 300px; width: 500px; overflow: hidden; display:flex; align-items: center; justify-content: center;">
                           @if($portofolio->gambar_porto)
                                <img loading="lazy" src="{{ asset('storage/' . $portofolio->gambar_porto) }}" alt="{{ $portofolio->judul_porto }}" class="img-fluid" style="width: 100%;">
                            @else
                                <img loading="lazy" src="{{ asset('fe/images/default.png') }}" alt="Default Image" class="img-fluid" style="width: 100%;">
                            @endif
                       </div>
                       <br>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                {{ $portofolio->judul_porto }}
                            </h3>
                           <ul class="portfolio-details">
                            <li>
                                  <i class="tf-ion-checkmark-round" style="font-size: 1.2em;"></i> ✅ Penandatanganan MoU: {{ $portofolio->tanggal_acara ? date('Y', strtotime($portofolio->tanggal_acara)) . '- Sekarang' : '2023-Sekarang' }}
                                </li>
                                <li>
                                    <i class="tf-ion-checkmark-round" style="font-size: 1.2em;"></i> ✅ Jadwal Pengangkutan: {{ $portofolio->jadwal_pengangkutan }}
                                </li>
                                <li>
                                    <i class="tf-ion-ios-leaf" style="font-size: 1.2em;"></i> ♻️ Sampah Terkumpul: {{ $portofolio->sampah_terkumpul }} Kg/Bulan
                                </li>
                           </ul>

                        </div>
                    </div>
                </div>
                <!-- /Single portfolio item -->
                @empty
                <div class="col-12 text-center">
                    <p>Tidak ada data portofolio.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>


    <!-- Start Process Section
    =========================================== -->
    <section class="process section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-3">
                            <div class="process-card p-4">
                                <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/ceklis.png" alt="Sampah dikelola sesuai regulasi pemerintah" style="max-width: 50px; display: block; margin: 0 auto;">
                                <p style="margin-top: 10px;">Sampah dikelola sesuai regulasi pemerintah</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-card p-4">
                                <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/7.png" alt="Edukasi pengelolaan sampah" style="max-width: 50px; display: block; margin: 0 auto;">
                                <p style="margin-top: 10px;">Edukasi pengelolaan sampah</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-card p-4">
                                <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/8.png" alt="Penjemputan Terjadwal" style="max-width: 50px; display: block; margin: 0 auto;">
                                <p style="margin-top: 10px;">Penjemputan Terjadwal</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-card p-4">
                                <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/9.png" alt="Laporan pengelolaan sampah" style="max-width: 50px; display: block; margin: 0 auto;">
                                <p style="margin-top: 10px;">Laporan pengelolaan sampah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscription section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <h2>Berlangganan</h2>
                        <p>Layanan berlangganan yang dirancang untuk memudahkan mengelola sampah dengan cara yang mudah, efisien, dan berkelanjutan.</p>
                        <div class="border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                   <div class="card">
                        <div class="card-body text-center">
                            <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/perumahan.png" alt="PERUMAHAN" style="max-width: 100px; display: block; margin: 0 auto;">
                            <h4 class="card-title mt-3">PERUMAHAN</h4>
                            <p class="card-text">Kami membantu menjaga lingkungan perumahan tetap bersih dan nyaman dengan penjemputan sampah yang teratur dan terjadwal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/industri.png" alt="KAWASAN INDUSTRI" style="max-width: 100px; display: block; margin: 0 auto;">
                            <h4 class="card-title mt-3">KAWASAN INDUSTRI</h4>
                            <p class="card-text">Dengan layanan kami, pengelolaan limbah industri menjadi lebih efisien dan ramah lingkungan</p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/perkantoran.png" alt="PERKANTORAN" style="max-width: 100px; display: block; margin: 0 auto;">
                            <h4 class="card-title mt-3">PERKANTORAN</h4>
                            <p class="card-text">Dengan layanan yang kami berikan dapat memastikan tempat kerja Anda bebas dari sampah, menciptakan lingkungan yang bersih dan sehat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2024/06/restoran-1.png" alt="RESTAURANT" style="max-width: 100px; display: block; margin: 0 auto;">
                            <h4 class="card-title mt-3">RESTAURANT</h4>
                           <p class="card-text">Kami pastikan kebersihan dan kesehatan restoran Anda menjadi prioritas kami melalui penjemputan sampah rutin dan terjadwal dengan berlangganan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper  -->
                    <div class="testimonial-slider owl-carousel owl-theme">
                       @if($testimonis->count() > 0)
                        @foreach($testimonis as $testimoni)
                            <div class="item text-center">
                                <div class="client-meta">
                                    <p>{{ $testimoni->testimoni }}</p>
                                </div>
                                <div class="client-meta">
                                    <h3>{{ $testimoni->nama }}</h3>
                                </div>
                            </div>
                        @endforeach
                       @else
                            <p>Belum ada testimoni</p>
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
