@include('partials.header-footer')
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="{{ asset('public\assets\docs\images\unnamed.png') }}
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <title>Ciroes</title>


    <!-- Mobile Specific Metas
        ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One page parallax responsive HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

    <!-- Favicon -->

    <!-- CSS
        ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('fe/pluginsfisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('fe/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('fe/plugins/lightbox2/css/lightbox.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('fe/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('fe/plugins/slick/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fe/css/style.css') }}">
</head>

<body id="body">

    <!--
        Start Preloader
        ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
        End Preloader
        ==================================== -->
    <!--
    Fixed Navigation
    ==================================== -->
    @include('partials.header-footer')
    <!--
    End Fixed Navigation
    ==================================== -->

    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="bg-one">
        <div class="top-footer">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <h3>KONTAK</h3>
                        <p>PT. Inovasi Keberlanjutan Indonesia</p>
                        <h3>Ciroes Office</h3>
                        <p> Abdi Praja Blok 1A RT. 27 Balikpapan Selatan. Kota Balikpapan. Kalimantan Timur
                        <p>HP: 0811-5955-050</p>
                        <p> contact@cirowaste.com</p>
                    </div>
                    <!-- End of .col-sm-3 -->
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <ul>
                            <li>
                                <h3>Layanan Kami</h3>
                            </li>
                            <li><a href="{{ route('portofolio.index') }}">Layanan Pengumpulan Sampah</a></li>
                            <li><a href="{{ route('service') }}">Layanan Sesuai Permintaan</a></li>
                            <li><a href="{{ route('waste') }}">Pengelolaan Sampah Acara</a></li
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->
                    <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                        <ul>
                            <li>
                                <h3>Quick Links</h3>
                            </li>
                            <li><a href="{{ route('portofolio.index') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('service') }}">Servis</a></li>
                            <li><a href="{{ route('beritautama') }}">Berita</a></li>
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->

                    <div class="col-lg-3 col-md-6">
                        <ul>
                            <li>
                                <h3>Connect with us Socially</h3>
                            </li>
                            <li><a href="https://www.instagram.com/cirowaste">Instagram</a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=628115955050&text&type=phone_number&app_absent=0">WhatsApp</a></li>
                            <li><a href="https://www.youtube.com/@ciroes7">Youtube</a></li>
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->
                </div>
            </div> <!-- end container -->
        </div>
    </footer> <!-- end footer -->


    <!-- end Footer Area
      ========================================== -->

    <!--
          Essential Scripts
          =====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('fe/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap4 -->
    <script src="{{ asset('fe/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('fe/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('fe/plugins/lightbox2/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('fe/plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('fe/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('fe/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('fe/plugins/google-map/gmap.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('fe/js/script.js') }}"></script>

</body>

</html>
