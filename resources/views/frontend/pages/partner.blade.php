@extends('frontend.layouts.app')

@section('title')
    Partner
@endsection

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{ asset('tempedia/img/bg-img/breadcumb3.jpg') }});">
        <div class="bradcumbContent">
            <p>Our</p>
            <h2>Partners</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container mb-100">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*" class="active">Browse All</a>
                        <a href="#" data-filter=".publishing">Publishing</a>
                        <a href="#" data-filter=".label">Label Perusahaan</a>
                        <a href="#" data-filter=".aggregator">Aggregator</a>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a1.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Premi Musik Era</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a2.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Premi Musik Era</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a3.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Premi Musik Era</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a4.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item label">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a5.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>Label</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a6.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>



                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a8.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Aam Smith</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a6.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item label">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a9.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>Label</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a10.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item publishing">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a11.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Publishing</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item aggregator">
                    <div class="single-album">
                        <img src="{{ asset('tempedia/img/bg-img/a12.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>PremierPro.</h5>
                            </a>
                            <p>Aggregator</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
