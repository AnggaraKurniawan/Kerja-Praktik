<header class="navigation fixed-top">
     <link rel="icon" type="image/png" href="{{ asset('public\unnamed.png') }}
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <!-- logo -->
            <a class="navbar-brand logo" href="{{ route('home') }}" style="margin-left: 200px;">
                <img loading="lazy" class="logo-default" src="{{ asset('fe/images/ciroes-new.png') }}" alt="logo" style="max-width: 120px; max-height: 25px;"/>
                <img loading="lazy" class="logo-white" src="{{ asset('fe/images/ciroes-new.png') }}" alt="logo" style="max-width: 120px; max-height: 25px;"/>
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('service') }}" id="navbarDropdown02" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Layanan <i class="tf-ion-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                            <li><a class="dropdown-item" href="{{ route('service') }}">Layanan Sesuai Permintaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('portofolioutama') }}">Layanan Pengumpulan Sampah</a></li>
                            <li><a class="dropdown-item" href="{{ route('waste') }}">Pengelolaan Sampah Acara</a></li>
                        </ul>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('beritautama') }}">Berita</a>
                    </li>
                    @guest
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Selamat Datang, {{ Auth::user()->name }}</a>
                    </li>
                @endguest
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
