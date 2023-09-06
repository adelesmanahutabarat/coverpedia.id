@extends('frontend.layouts.app')

{{-- @section('title') {{app_name()}} @endsection --}}

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('tempedia/img/bg-img/bg-1.jpg') }});"></div>
                <div class="slide-img bg-overlay-green"></div>
                <!-- Slide Content -->
                <div class="container" style="display:flex;align-items: flex-end;height: 50%;">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 class="mb-3">Music License Platform</h2>
                                <h6 class=" d-none d-sm-block">Solusi Terintegrasi bagi Musisi dan Pencipta.</h6>
                                <span class="d-none d-sm-block">
                                    <a  href="#" class="btn oneMusic-btn ">Discover <i class="fa fa-angle-double-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('tempedia/img/bg-img/bg-2.jpg') }});"></div>
                <div class="slide-img bg-overlay-green"></div>
                <!-- Slide Content -->
                <div class="container" style="display:flex;align-items: flex-end;height: 50%;">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 class="mb-3">Solusi Terintegrasi <br>bagi Musisi dan Pencipta.</h2>
                                <h6 class=" d-none d-sm-block">Coverpedia hadir untuk menghadirkan ekosistem yang sehat untuk <br>musisi,pencipta dan label</h6>
                                <span class="d-none d-sm-block">
                                    <a  href="#" class="btn oneMusic-btn">Discover <i class="fa fa-angle-double-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2 mb-0">
                        <p>See what’s popular</p>
                        <h2>TOP MUSIC COVER</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Data diambil dari youtube secara realtime,data yang diambil adalah top 10 asset dengan view terbanyak</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/1. Berbeza Kasta by Kalia Siska.jpg') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Berbeza Kasta</h5>
                                </a>
                                <p>Kalia Siska</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/2. Apakah Itu Cinta by Vita Alvia.jpg') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Apakah Itu Cinta</h5>
                                </a>
                                <p>Vita Alvia</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/3. Seharusnya Aku by Safira Inema.jpg') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Seharusnya Aku</h5>
                                </a>
                                <p>Safira Inema</p>
                            </div>
                        </div>
                        {{-- {{ asset('tempedia/') }} --}}
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/4. Gaun Merah by Vita Alvia.jpg') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Gaun Merah</h5>
                                </a>
                                <p>Vita Alvia</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/5. Jauh Sebelum Ada Kamu (feat. James AP) by Shinta Arshinta.jpg') }} " alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Jauh Sebelum Ada Kamu (feat. James AP)</h5>
                                </a>
                                <p>Shinta Arshinta</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/6. Sayang Jang Marah Marah by Vita Alvia.jpg') }} " alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Sayang Jang Marah Marah</h5>
                                </a>
                                <p>Vita Alvia</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/top-music-cover/7. Ku Puja Puja by Happy Asmara.jpg') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Ku Puja Puja</h5>
                                </a>
                                <p>Happy Asmara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>New Release</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/1. Sedon Lewa Papan by Azizah Maumere.jpg') }}" alt="">
                            <!-- Album Price -->

                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Sedon Lewa Papan</h5>
                            </a>
                            <p>Azizah Maumere</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/2. Pipise Mekada Bagus by Bella Queen.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Pipise Mekada Bagus</h5>
                            </a>
                            <p>Bella Queen</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/3. Kuda Laka Loli Versi Indonesia by Sasya Arkhisna.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Kuda Laka Loli Versi Indonesia</h5>
                            </a>
                            <p>Sasya Arkhisna</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/4. Stasiun Gambir by Dinda Dewi.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Stasiun Gambir</h5>
                            </a>
                            <p>Dinda Dewi</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/5. Dermaga Biru by Dini Kurnia.jpg') }}" alt="">
                            <!-- Album Price -->
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Dermaga Biru</h5>
                            </a>
                            <p>Dini Kurnia</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/6. Ku Puja Puja by Syahiba Saufa.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Ku Puja Puja</h5>
                            </a>
                            <p>Syahiba Saufa</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/7. Nyanyian Rindu by Shinta Arsinta.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Nyanyian Rindu</h5>
                            </a>
                            <p>Shinta Arsinta</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/8. Cinta Monyet by Amay Cogan - Rafel - NJproject.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Cinta Monyet</h5>
                            </a>
                            <p>Amay Cogan</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/9. Berbeza Kasta by Aris Idol.jpg') }}" alt="">
                            <!-- Album Price -->
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Berbeza Kasta</h5>
                            </a>
                            <p>Aris Idol</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/10. Kasih Pujaan by Diandra Ayu ft Gahar King.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Kasih Pujaan</h5>
                            </a>
                            <p>Diandra Ayu ft Gahar King</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/11. Sonia Kau Sebut Namaku by Denik Armila.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Sonia Kau Sebut Namaku</h5>
                            </a>
                            <p>Denik Armila</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                        <div class="album-thumb">
                            <img src="{{ asset('img/new-release/12. Anak Medan by Lentera Trio.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Anak Medan</h5>
                            </a>
                            <p>Lentera Trio</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url({{ asset('tempedia/img/bg-img/bg-4.jpg') }} );">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="{{ asset('tempedia/img/bg-img/cover.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>Our Comitment</p>
                            <h2>Trust & Empowerment</h2>
                        </div>
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                        <div class="song-play-area">
                            <div class="song-name text-center">
                                <p class="mb-0">“Music is the only thing I’ve ever known that doesn’t have any rules at all.” — Josh Homme</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">


                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-8">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Top Composer</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt7.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Ipank</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt8.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Thomas Arya</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt9.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Ipank</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt10.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Ipank</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt11.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Ipank</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt12.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Ipank</h6>
                                    <p>Youtube Viewers: 89,793,240</p>
                                </div>
                            </div>
                            <div class="second-part">
                                <div class="content-">
                                    <p>Cover Song: <b>400</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Song</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa1.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa2.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Thomas Arya</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa3.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa4.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa5.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa6.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="{{ asset('tempedia/img/bg-img/pa7.jpg') }}" alt="">
                            </div>
                            <div class="content-">
                                <h6 class="mb-0">Ipank</h6>
                                <p>Judul Lagu Ipank</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url({{ asset('tempedia/img/bg-img/bg-2.jpg') }});display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

@endsection
