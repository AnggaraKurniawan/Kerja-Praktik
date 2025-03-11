@extends('layouts.app')

@section('contents')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tentang Kami</h2>
                <ol class="breadcrumb header-bradcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="about-shot-info section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-20">
                <h2 class="mb-3">Visi<br></h2>
                <p>
                    Mempercepat Indonesia menuju Circular Economy. Agar sampah tidak lagi jadi masalah, tapi menjadi berkah. Sehingga sampah dapat menjadi salah satu penggerak ekonomi di Indonesia</p>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img loading="lazy" class="img-fluid" src="images/company/company-image.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="promo-video section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center">
                    <h2>Core Values</h2>
                    <p>Circular Economy Heroes CIROES</p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="video-container">
                    <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/I4ONZR4RaZE"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<<!-- Start Call To Action
==================================== -->
    <section class="awards-section">
        <div class="container awards-section__container">
            <div class="row awards-section__row">
                <div class="col-md-12 text-center awards-section__content">
                    <h2 class="awards-section__heading">Penghargaan dan Prestasi Kami</h2>
                    <div class="row justify-content-center awards-section__award-row">
                        <div class="col-md-12">
                            <div class="company-gallery awards-section__gallery">
                                 <div class="award-item awards-section__award-item">
                                    <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2023/11/kkpb-1.png" alt="Best Innovation Paper 2020">
                                     <p class="awards-section__award-text">Best Innovation Paper 2020</p>
                                 </div>
                                <div class="award-item awards-section__award-item">
                                    <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2023/11/mmb-1.png" alt="Startup Terbaik">
                                    <p class="awards-section__award-text">Startup Terbaik</p>
                                </div>
                                <div class="award-item awards-section__award-item">
                                    <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2023/11/bcl.png" alt="Pengelolaan Sampah Lautan Terbaik">
                                    <p class="awards-section__award-text">Pengelolaan Sampah Lautan Terbaik</p>
                                </div>
                                <div class="award-item awards-section__award-item">
                                     <img loading="lazy" src="https://cirowaste.com/wp-content/uploads/2023/11/idt-1.png" alt="Startup Terbaik Indonesia">
                                    <p class="awards-section__award-text">Startup Terbaik Indonesia</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .awards-section {
                 background-color: #e3f2fd; /* Light blue background color */
                 padding: 60px 0;
             }
            .awards-section__container{
               width: 100%;
                padding-right: 15px;
               padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
              }

             @media (min-width: 576px) {
                  .awards-section__container {
                       max-width: 540px;
                  }
              }
             @media (min-width: 768px) {
                  .awards-section__container {
                      max-width: 720px;
                 }
             }
              @media (min-width: 992px) {
                  .awards-section__container {
                      max-width: 960px;
                  }
              }
             @media (min-width: 1200px) {
                   .awards-section__container {
                       max-width: 1140px;
                   }
               }
            .awards-section__row{

             }

           .awards-section__content{
               text-align: center;
             }

            .awards-section__heading{
                  font-size: 2.5em;
                font-weight: 700;
                 margin-bottom: 20px;
                  color: #333;
             }

              .awards-section__award-row{
                  justify-content: center;
             }

             .awards-section__gallery{
                display: flex;
                  justify-content: center;
                  align-items: center;
                flex-wrap: wrap;
             }

             .awards-section__award-item{
                  text-align: center;
                display: flex;
                  flex-direction: column;
                 align-items: center;
                margin-bottom: 20px;
                 margin-right: 15px;
                flex: 1 0 calc(25% - 15px); /* Added for equal spacing and sizing */

             }


            .awards-section__award-item img {
               max-height: 100px;
                 margin-bottom: 10px;
                 object-fit: contain;
             }

           .awards-section__award-text {
                 margin-top: 10px;
                  font-size: 1em;
                  color: #666;
               font-weight: 700;
             }

             .text-center {
                text-align: center;
           }
            .align-items-center {
                 align-items: center;
             }
             .justify-content-center {
                  justify-content: center;
           }
           .mb-4{
               margin-bottom: 1.5rem;
            }
         </style>


    </section>

