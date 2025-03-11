@extends('layouts.app')

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Portfolio</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="portfolio section-sm" id="portfolio">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Kerja Kami</h2>
                    <p>Berikut adalah daftar portofolio kami.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Sampah Terkumpul</th>
                                <th>Tanggal Acara</th>
                                <th>Perkiraan Peserta</th>
                                <th>Isi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
