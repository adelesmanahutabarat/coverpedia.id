@extends('frontend.layouts.app')

@section('title')
    Song
@endsection

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{ asset('tempedia/img/bg-img/breadcumb3.jpg') }});">
        <div class="bradcumbContent">
            <p>Katalog</p>
            <h2>Original Song</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

     <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">


                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-12 mb-100">
                    <div class="new-hits-area ">

                        <form action="">
                          <div class="p-1 bg-white rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                              <input type="search" placeholder="Cari berdasarkan judul,pencipta atau publishing" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                              <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-dark"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>

                        </form>
                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{ asset('tempedia/img/bg-img/wt7.jpg') }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
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
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
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
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
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
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
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
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
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
                                    <h6>Dermaga Biru - Thomas Arya</h6>
                                    <p><i class="fa fa-calendar"></i> 2022-07-01 <i class="fa fa-tag"></i> PT. Premi Musik Era</p>
                                </div>
                            </div>

                            <div class="second-part">
                                <div class="content-">
                                    <p>Jumlah Cover <b>#400</b></p>
                                    <p>Total Views: <b>35,333,888</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="load-more-btn text-center mt-4">
                                <a href="#" class="btn oneMusic-btn"><i class="fa fa-angle-double-left"></i> Previous </a>
                                <a href="#" class="btn oneMusic-btn">Next <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end paginate -->
                    <!-- end table -->
                </div>


            </div>
        </div>
    </section>
@endsection
