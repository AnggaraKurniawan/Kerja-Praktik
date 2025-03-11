@extends('layouts.app')

@section('content')
  <!-- Isi konten halaman -->
   <section class="hero-area" style="background-image: url('{{ asset('fe/images/_MG_7000_11zon_11zon-3864513520.webp') }}');">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="block mt-4">
                      <h1 class="wow fadeInUp hero-title" data-wow-duration=".5s" data-wow-delay=".3s">
                          <span style="color: white">Mempercepat Indonesia Menuju Circular Economy</span> <br>
                      </h1>
                      <p class="wow fadeInUp hero-subtitle" data-wow-duration=".5s" data-wow-delay=".5s" style="color: white">
                        tetapi menjadi berkah sehingga sampah dapat menjadi salah satu penggerak ekonomi
                      </p>
                      <ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
                          <li class="list-inline-item">
                              <a data-scroll href="/service" class="btn btn-main">Layanan Kami</a>
                          </li>
                          <li class="list-inline-item">
                              <a data-scroll href="/about" class="btn btn-transparent">Tentang Kami</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
       <style>
          .hero-area {
            background-size: cover;
              background-repeat: no-repeat;
              height: 700px;
             display: flex;
              align-items: center;
              justify-content: center;
               position: relative; /* Menambahkan posisi relative */
          }
           .hero-area::before {
            content: '';
             position: absolute;
             top: 0;
            left: 0;
              right: 0;
             bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Layer dengan warna hitam dan opacity 0.5 */
            }
           .hero-area .container {
             position: relative; /* Menambahkan posisi relative pada container agar berada di atas overlay */
               z-index: 1;
              }
           .hero-title{
              font-size: 3.5em;
             margin-bottom: 20px;
            }
            .hero-subtitle{
               font-size: 1.5em;
              margin-bottom: 30px;
           }
          </style>
  </section>

  <!--
  Start About Section
  ==================================== -->
  <section class="service-2 section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Tentang Kami</h2>
                    <p>Ciro Waste adalah circular economy marketplace yang menghubungkan penjual dan pembeli sampah daur ulang dan bertransaksi dengan mudah, cepat, dan menguntungkan melalui satu platform. </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row text-center services-row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <i class="tf-ion-ios-alarm-outline"></i>
                            <h4>EDUKASI</h4>
                            <p>Melalui pemberdayaan masyarakat, Kami ingin pekerjaan disektor pengelolaan sampah tidak lagi dipandang sebelah mata. Melainkan pekerjaan yang mulia dan memiliki job deskripsi yang jelas.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <i class="tf-ion-ios-briefcase-outline"></i>
                            <h4>TEKNOLOGI</h4>
                            <p>Kami yakin dengan menggunakan pemanfaatan teknologi, kami dapat memberi akses kemudahan pengumpulan sampah yang lebih baik.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-item">
                            <i class="tf-ion-ios-email-outline"></i>
                            <h4>PEMBERDAYAAN</h4>
                            <p>Melalui pemberdayaan masyarakat, Kami ingin pekerjaan disektor pengelolaan sampah tidak lagi dipandang sebelah mata. Melainkan pekerjaan yang mulia dan memiliki job deskripsi yang jelas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- End row -->
      </div>
      <!-- End container -->
  </section>
  <!-- End section -->

  <!--
  Start About Section
  ==================================== -->
  <section class="about-2 section" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <!-- section title -->
        <div class="col-lg-6">
          <div class="title text-center">
            <h2>Sistem Terintegrasi</h2>
            <p>Sistem Terintegrasi kami hadir untuk mempermudah dan mempercepat proses pengumpulan sampah terpilah dengan produk mobile apps CIROES (Pahlawan Circular Economy) dan CISTORE (Bank Sampah Masa Kini). Kedua aplikasi ini dirancang untuk bekerja dalam satu sistem yang terintegrasi, memastikan efisiensi dan kemudahan bagi pengguna.</p>
            <div class="border"></div>
          </div>
        </div>
        <!-- /section title -->
      </div>

      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <img loading="lazy" src="{{ asset('fe/images/about/Desain-tanpa-judullayananintegrasi.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
          <h2 style="font-size: 1.75rem; font-weight: 600; color: #333; margin-bottom: 15px;">CIROES (Pahlawan Circular Economy)</h2>
            <li style="position: relative; padding-left: 25px; margin-bottom: 10px; font-size: 16px; line-height: 1.6; color: #555; display: flex; align-items: center;">
              <span style="position: absolute; left: 5px; top: 50%; transform: translateY(-50%); width: 8px; height: 8px; background-color: black; border-radius: 50%; display: inline-block;"></span>
              Mendapatkan Informasi Edukatif: Menyediakan informasi tentang pentingnya ekonomi sirkular dan bagaimana masyarakat dapat berkontribusi.
            </li>
            <li style="position: relative; padding-left: 25px; margin-bottom: 10px; font-size: 16px; line-height: 1.6; color: #555; display: flex; align-items: center;">
             <span style="position: absolute; left: 5px; top: 50%; transform: translateY(-50%); width: 8px; height: 8px; background-color: black; border-radius: 50%; display: inline-block;"></span>
              Mengelola Sampah: Pengguna dapat melacak dan mengelola sampah mereka, memastikan bahwa sampah tersebut dipilah dengan benar sebelum dikirim ke bank sampah.
            </li>
            <li style="position: relative; padding-left: 25px; margin-bottom: 10px; font-size: 16px; line-height: 1.6; color: #555; display: flex; align-items: center;">
               <span style="position: absolute; left: 5px; top: 50%; transform: translateY(-50%); width: 8px; height: 8px; background-color: black; border-radius: 50%; display: inline-block;"></span>
              Berpartisipasi dalam Komunitas: Pengguna dapat bergabung dengan komunitas yang peduli dengan lingkungan dan berbagi tips serta trik tentang pengelolaan sampah yang efektif.
            </li>
          </ul>
          <h2 style="font-size: 1.75rem; font-weight: 600; color: #333; margin-bottom: 15px;">CISTORE (Bank Sampah Masa Kini)</h2>
            <li style="position: relative; padding-left: 25px; margin-bottom: 10px; font-size: 16px; line-height: 1.6; color: #555; display: flex; align-items: center;">
              <span style="position: absolute; left: 5px; top: 50%; transform: translateY(-50%); width: 8px; height: 8px; background-color: black; border-radius: 50%; display: inline-block;"></span>
              Mengirim Sampah Terpilah: Pengguna dapat menjadwalkan pengiriman sampah terpilah ke bank sampah terdekat dengan mudah melalui aplikasi.
            </li>
          </ul>
           <div class="text-center">
              <a href="https://api.whatsapp.com/send/?phone=628115955050&text&type=phone_number&app_absent=0" class="btn btn-main mt-20" style="background: #007bff; border: none; color: #fff; padding: 10px 20px; border-radius: 5px; cursor: pointer; text-decoration: none;">Chat via WhatsApp</a>
          </div>
        </div>
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </section>
  <!-- End section -->

  <!--
  Start Call To Action
  ==================================== -->
  <section class="call-to-action section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 text-center">
                  <h2>"Di Ciroes sampah bukan lagi menjadi masalah tetapi menjadi berkah. karena di ciroes #SEMUAJADIBERMANFAAT"</h2>
                  <a href="https://api.whatsapp.com/send/?phone=628115955050&text&type=phone_number&app_absent=0" class="btn btn-main">Chat Via WhatsApp</a>
              </div>
          </div>
          <!-- End row -->
      </div>
      <!-- End container -->
  </section>
  <!-- End section -->

  <!--
  Start Counter Section
  ==================================== -->
<section class="counter-wrapper section-sm">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <div class="video-container">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/urxFTcaDaDM"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-5">
        <!-- first count item -->
        <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
          <div class="counters-item">
            <i class="tf-ion-ios-alarm-outline"></i>
            <div>
              <span class="counter" data-count="50">0</span>
            </div>
            <h3>Bank Sampah</h3>
          </div>
        </div>
        <!-- end first count item -->

        <!-- second count item -->
        <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
          <div class="counters-item">
            <i class="tf-ion-ios-analytics-outline"></i>
            <div>
              <span class="counter" data-count="6000">0</span>
            </div>
            <h3>Pelanggan</h3>
          </div>
        </div>
        <!-- end second count item -->

        <!-- third count item -->
        <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
          <div class="counters-item">
            <i class="tf-ion-ios-compose-outline"></i>
            <div>
              <span class="counter" data-count="3000">0</span>
            </div>
            <h3>Pesanan</h3>
          </div>
        </div>
        <!-- end third count item -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section -->
  <!-- Start Testimonial
  =========================================== -->
<!-- Start Testimonial Section
        =========================================== -->
   <!-- Start Testimonial Section
    =========================================== -->
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
    <!-- End Testimonial Section
        =========================================== -->
    <!-- End Testimonial Section
        =========================================== -->

  <!--
 <!--
  Start Blog Section
  =========================================== -->
  <section class="blog" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center ">
                    <h2> Latest <span class="color">Posts</span></h2>
                    <div class="border"></div>
                    <p>Berita terbaru dan terupdate seputar Ciroes</p>
                </div>
            </div>
            <!-- /section title -->
        </div>
    </section>
    <section class="posts section">
        <div class="container">
            <div class="row">
                <!-- /section title -->
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
