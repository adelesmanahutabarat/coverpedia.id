@extends('frontend.layouts.app')

@section('title')
    Song
@endsection

@section('content')
        <!-- ##### Breadcumb Area Start ##### -->
        <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{ asset('tempedia/img/bg-img/breadcumb3.jpg') }});">
            <div class="bradcumbContent">
                <p>Katalog</p>
                <h2>Cover Song</h2>
            </div>
        </section>
        <!-- ##### Breadcumb Area End ##### -->



        <!-- ##### Buy Now Area Start ##### -->
        <div class="oneMusic-buy-now-area mb-100 section-padding-100-0">
            <div class="container">
                <form action="">
                  <div class="p-1 bg-white rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                      <input type="search" placeholder="Cari berdasarkan judul" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                      <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-dark"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>

                </form>
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">

                            <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://www.youtube.com/watch?v=32AJ5zWqynw" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Thomas Arya - Berbeza Kasta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>

                             <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/t869B37WbuA/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Ipank - Apakah Itu Cinta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>

                             <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/t869B37WbuA/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Ipank - Apakah Itu Cinta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>


                             <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Thomas Arya - Berbeza Kasta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>


                             <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/t869B37WbuA/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Ipank - Apakah Itu Cinta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>


                             <!-- Single Album Area -->
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="single-album-area">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">

                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info">
                                        <a href="#">
                                            <h5>Thomas Arya - Berbeza Kasta (Official Video)</h5>
                                        </a>
                                        <p>By Teras Musik | Slow Rock Melayu</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="load-more-btn text-center">
                                    <a href="#" class="btn oneMusic-btn"><i class="fa fa-angle-double-left"></i> Previous </a>
                                    <a href="#" class="btn oneMusic-btn">Next <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="popular-artists-area mb-100 pt-3">
                            <div class="section-heading text-left mb-3 mt-0 wow fadeInUp" data-wow-delay="50ms">
                                <h5>Popular Cover Song</h5>
                                <!-- <h2>Cover Song</h2> -->
                            </div>


                            <!-- Single Cover -->
                            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-album-area mb-0">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">
                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://youtu.be/wJtYCQ-F5Ss" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info pb-0">
                                        <a href="#">
                                            <h6 class="mb-0">Thomas Arya - Berbeza Kasta (Official Video)</h6>
                                        </a>
                                        <p>56,465,694 Viewers</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cover -->
                            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-album-area mb-0">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">
                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://youtu.be/wJtYCQ-F5Ss" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info pb-0">
                                        <a href="#">
                                            <h6 class="mb-0">Thomas Arya - Berbeza Kasta (Official Video)</h6>
                                        </a>
                                        <p>56,465,694 Viewers</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cover -->
                            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-album-area mb-0">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">
                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://youtu.be/wJtYCQ-F5Ss" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info pb-0">
                                        <a href="#">
                                            <h6 class="mb-0">Thomas Arya - Berbeza Kasta (Official Video)</h6>
                                        </a>
                                        <p>56,465,694 Viewers</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cover -->
                            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-album-area mb-0">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">
                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://youtu.be/wJtYCQ-F5Ss" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info  pb-0">
                                        <a href="#">
                                            <h6 class="mb-0">Thomas Arya - Berbeza Kasta (Official Video)</h6>
                                        </a>
                                        <p>56,465,694 Viewers</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cover -->
                            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                                <div class="single-album-area mb-0">
                                    <div class="album-thumb">
                                        <img src="https://i.ytimg.com/vi/vdeV2hpYzT4/maxresdefault.jpg" alt="">
                                        <!-- Play Icon -->
                                        <div class="play-icon">
                                            <a href="https://youtu.be/wJtYCQ-F5Ss" class="video--play--btn"><span class="icon-play-button"></span></a>
                                        </div>
                                    </div>
                                    <div class="album-info  pb-0">
                                        <a href="#">
                                            <h6 class="mb-0">Thomas Arya - Berbeza Kasta (Official Video)</h6>
                                        </a>
                                        <p>56,465,694 Viewers</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- ##### Buy Now Area End ##### -->
@endsection
