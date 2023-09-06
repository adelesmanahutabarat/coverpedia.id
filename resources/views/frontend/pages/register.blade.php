<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.png') }}">
    {{-- <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('tempedia/img/core-img/favicon.ico') }} ">

    <link rel="stylesheet" href="{{ asset('tempedia/style2.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-30">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navcus" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white">Home</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="/loginfront" class="btn" style="color: white;">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container ctmcardform">
        <div class="card">
            <form action="#" class="form" id="forms" onsubmit="event.preventDefault()">


                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Informasi Umum"></div>

                    <div class="progress-step" data-title="Preferensi Login"></div>
                    <div class="progress-step" data-title="Preview"></div>
                </div>
                <div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Akun</label>
                        <div class="col-sm-9">
                            <b><p>: Individual Content Creator</p></b>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                           <b><p>: Dudin</p></b>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
                           <b><p>: Jawa Barat</p></b>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Kabupaten/Kota</label>
                        <div class="col-sm-9">
                           <b><p>: Bekasi</p></b>
                        </div>
                    </div>

                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-9">
                           <b><p>: Jl raya jati waringin</p></b>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-9">
                           <b><p>: 08923429384</p></b>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Alamat email</label>
                        <div class="col-sm-9">
                           <b><p>: dudin@g.com</p></b>
                        </div>
                    </div>

                    <div class=" row">
                        <p for="staticEmail" class="col-sm-3 col-form-label">Sosial Media</p>
                    </div>

                    <div class="row">
                        <p class="col-sm-3">- Instagram : </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">- Facebook : </p>
                    </div>
                    <div class="row">
                        <p class="col-sm-3">- Twitter : </p>
                    </div>
                    <div class="mb-2 row">
                        <p class="col-sm-3">- Whatapp : </p>
                    </div>

                    <div class="mb-2 row">
                        <p class="col-sm-3">Foto Selfi</p>
                        <div class="col-sm-9">
                           <img>
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <p class="col-sm-3">Foto Ktp</p>
                        <div class="col-sm-9">
                           <img>
                        </div>
                    </div>

                    <div class="row">
                        <b><p class="col-form-label" style="text-decoration: underline; font-size: 20px;">PREFERENSI LOGIN</p></b>
                    </div>

                    <div class="row">
                        <p class="col-sm-3">Username : </p>
                    </div>
                    <div class="mb-3 row">
                        <p class="col-sm-3">Password : </p>
                    </div>

                    <div class="btns-group">
                        <a href="#" class="btn btn-secondary">Previous</a>
                        <input type="submit" value="Submit" id="submit-form" class="btn btn-success" />
                    </div>
                    {{-- end preview --}}

                </div>
                {{-- <div class="step-forms step-forms-active">
                    <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Mendaftar Sebagai <b class="text-danger"> *</b> </label>
                            <select class="form-select" id="exampleFormControlSelect1">
                                <option>Individual Content Creator</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nama Lengkap <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="inputEmail4">Propinsi <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="inputEmail4">Kota / Kabupaten <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputAddress">Alamat Lengkap <b class="text-danger"> *</b></label>
                        <textarea class="form-control" name=""></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputEmail4">Nama Alias <i style="font-size: 100%;color: #3C79F5;">(nick
                                name)</i></label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nickname">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputEmail4">Nomor Handphone <b class="text-danger"> *</b> <br>
                            <i style="font-size: 100%;color: #3C79F5;">(Nomor ini akan digunakan sebagai username, oleh
                                karenanya pastikan nomor HP adalah yang aktif sebagai media komunikasi)</i></label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Nomor Handphone">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">Foto Selfi (Max. 3Mb) <b class="text-danger"> *</b></label>
                        <input type="file" class="form-control" placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputEmail4">No KTP <b class="text-danger"> *</b></label>
                        <input type="number" class="form-control" id="inputEmail4" placeholder="Masukan No Ktp">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">Foto KTP (Max. 3Mb) <b class="text-danger"> *</b></label>
                        <input type="file" class="form-control" placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputEmail4">Email <b class="text-danger"> *</b> <br>
                            <i style="font-size: 100%;color: #3C79F5;">(Alamat Email ini akan digunakan sbg penerima
                                notifikasi-notifikasi, seperti reset password dll, jadi mohon dipastikan bahwa email ini
                                benar adanya)</i></label>
                        <input type="email" class="form-control" id="inputEmail4"
                            placeholder="Masukan alamat email anda">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">No. NPWP <br>
                            <i style="font-size: 100%;color: #3C79F5;">(NPWP diperlukan agar potongan pajak terhadap
                                penghasilan bisa lebih ekonomis)</i></label>
                        <input type="number" class="form-control" placeholder="Masukan nomor npwp">
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">Foto NPWP (Max. 3Mb)</label>
                        <input type="file" class="form-control" placeholder="">
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                            <b style="font-weight: bold"><p>Media Sosial :</p></b>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Instagram :</label>
                        <div class="col-sm-10 mb-3">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <label for="inputPassword" class="col-sm-2 col-form-label">Facebook :</label>
                        <div class="col-sm-10 mb-3">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <label for="inputPassword" class="col-sm-2 col-form-label">Twitter :</label>
                        <div class="col-sm-10 mb-3">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <label for="inputPassword" class="col-sm-2 col-form-label">Whatsapp :</label>
                        <div class="col-sm-10 mb-3">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">Deskripsi singkat tentang Anda: <b class="text-danger">
                                *</b></label>
                        <textarea class="form-control" name=""></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputAddress">Deskripsi lanjutan tentang Anda: <b class="text-danger">
                                *</b></label>
                        <textarea class="form-control" name=""></textarea>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nama Channel <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" id="inputEmail4"
                                placeholder="Masukan Nama Channel Anda">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="inputEmail4">Nama Bank <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" placeholder="Nama Bank"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="inputEmail4">No Rekening Bank <b class="text-danger"> *</b></label>
                            <input type="number" class="form-control" placeholder="No Rekening Bank"
                                aria-label="Last name">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nama Asli Pemilik Rekening <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" id="inputEmail4"
                                placeholder="Nama Asli Pemilik Rekening">
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-primary" style="float: right;">Next</a>
                    </div>
                </div> --}}

                {{-- Preferensi Login --}}
                {{-- <div class="step-forms">
                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Username <b class="text-danger"> *</b></label>
                            <input type="text" class="form-control" id="inputEmail4"
                                placeholder="Masukan Username">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Password <b class="text-danger"> *</b></label>
                            <input type="password" class="form-control" id="inputEmail4"
                                placeholder="Masukan Password">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Confirm Password <b class="text-danger"> *</b></label>
                            <input type="password" class="form-control" id="inputEmail4"
                                placeholder="Konfirmasi Password">
                        </div>
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-secondary">Previous</a>
                        <a href="#" class="btn btn-primary">Next</a>
                    </div>
                </div> --}}
                {{-- end preferensi login --}}

                {{-- Preview --}}
                <div class="step-forms">
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Akun</label>
                        <div class="col-sm-9">
                            <p>daftar   </p>
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kabupaten</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="email@example.com">
                        </div>
                    </div>
                    <div class="btns-group">
                        <a href="#" class="btn btn-secondary">Previous</a>
                        <input type="submit" value="Submit" id="submit-form" class="btn btn-success" />
                    </div>
                    {{-- end preview --}}

                </div>
            </form>
        </div>
    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    {{-- <script src="{{ asset('tempedia/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('tempedia/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('tempedia/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('tempedia/js/plugins/plugins.js') }}"></script>
    <!-- Active js --> --}}
    {{-- <script src="{{ asset('tempedia/js/active.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        const prevBtns = document.querySelectorAll(".btn-secondary");
        const nextBtns = document.querySelectorAll(".btn-primary");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".step-forms");
        const progressSteps = document.querySelectorAll(".progress-step");


        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();

            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();

            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("step-forms-active") &&
                    formStep.classList.remove("step-forms-active");
            });

            formSteps[formStepsNum].classList.add("step-forms-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");

                } else {
                    progressStep.classList.remove("progress-step-active");

                }
            });

            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum) {

                    progressStep.classList.add("progress-step-check");
                } else {

                    progressStep.classList.remove("progress-step-check");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }


        document.getElementById("submit-form").addEventListener("click", function() {

            progressSteps.forEach((progressStep, idx) => {
                if (idx <= formStepsNum) {

                    progressStep.classList.add("progress-step-check");
                } else {

                    progressStep.classList.remove("progress-step-check");
                }
            });

            var forms = document.getElementById("forms");
            forms.classList.remove("form");
            forms.innerHTML =
                '<div class="welcome"><div class="content"><svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg><h2>Thanks for signup!</h2><span>We will contact you soon!</span><div></div>';
        });
    </script>
</body>

</html>


@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay"
        style="background-image: url({{ asset('tempedia/img/bg-img/breadcumb3.jpg') }});">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Register</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Register Area Start ##### -->
    <section class="section-padding-100" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <div class="card shadow-sm card-register" style="background-color: #F5EDCE; ">
                <div class="row justify-content-center" style="padding-bottom: 20px;">
                    <div class="col-12 col-lg-8">
                        <div class="login-content pt-3">
                            <h3>PENDAFTARAN AKUN BARU</h3>
                            <h4 style="font-weight: lighter ;">Akun Perorangan</h4>
                            <hr>
                            <!-- Login Form -->
                            <div class="">
                                <form>
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Mendaftar Sebagai <b class="text-danger"> *</b>
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1">
                                                <option>Individual Content Creator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Lengkap <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" id="inputEmail4"
                                                placeholder="Nama lengkap">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="inputEmail4">Propinsi <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="inputEmail4">Kota / Kabupaten <b class="text-danger">
                                                    *</b></label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                    </div>
                                    {{-- <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Propinsi <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nama lengkap">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Kota / Kabupaten <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nama lengkap">
                                        </div>
                                    </div> --}}
                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Alamat Lengkap <b class="text-danger"> *</b></label>
                                        <textarea class="form-control" name=""></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="inputEmail4">Nama Alias <i
                                                style="font-size: 100%;color: #3C79F5;">(nick name)</i></label>
                                        <input type="text" class="form-control" id="inputEmail4"
                                            placeholder="Nickname">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="inputEmail4">Nomor Handphone <b class="text-danger"> *</b> <br>
                                            <i style="font-size: 100%;color: #3C79F5;">(Nomor ini akan digunakan sebagai
                                                username, oleh karenanya pastikan nomor HP adalah yang aktif sebagai media
                                                komunikasi)</i></label>
                                        <input type="number" class="form-control" id="inputEmail4"
                                            placeholder="Nomor Handphone">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Foto Selfi (Max. 3Mb) <b class="text-danger">
                                                *</b></label>
                                        <input type="file" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail4">No KTP <b class="text-danger"> *</b></label>
                                        <input type="number" class="form-control" id="inputEmail4"
                                            placeholder="Masukan No Ktp">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Foto KTP (Max. 3Mb) <b class="text-danger">
                                                *</b></label>
                                        <input type="file" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail4">Email <b class="text-danger"> *</b> <br>
                                            <i style="font-size: 100%;color: #3C79F5;">(Alamat Email ini akan digunakan sbg
                                                penerima notifikasi-notifikasi, seperti reset password dll, jadi mohon
                                                dipastikan bahwa email ini benar adanya)</i></label>
                                        <input type="email" class="form-control" id="inputEmail4"
                                            placeholder="Masukan alamat email anda">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">No. NPWP <br>
                                            <i style="font-size: 100%;color: #3C79F5;">(NPWP diperlukan agar potongan pajak
                                                terhadap penghasilan bisa lebih ekonomis)</i></label>
                                        <input type="number" class="form-control" placeholder="Masukan nomor npwp">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Foto NPWP (Max. 3Mb)</label>
                                        <input type="file" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <h6>Media Sosial :</h6>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Instagram :</label>
                                        <div class="col-sm-10 mb-3">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>

                                        <label for="inputPassword" class="col-sm-2 col-form-label">Facebook :</label>
                                        <div class="col-sm-10 mb-3">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>

                                        <label for="inputPassword" class="col-sm-2 col-form-label">Twitter :</label>
                                        <div class="col-sm-10 mb-3">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>

                                        <label for="inputPassword" class="col-sm-2 col-form-label">Whatsapp :</label>
                                        <div class="col-sm-10 mb-3">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Deskripsi singkat tentang Anda: <b class="text-danger">
                                                *</b></label>
                                        <textarea class="form-control" name=""></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputAddress">Deskripsi lanjutan tentang Anda: <b class="text-danger">
                                                *</b></label>
                                        <textarea class="form-control" name=""></textarea>
                                    </div>

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Channel <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" id="inputEmail4"
                                                placeholder="Masukan Nama Channel Anda">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="inputEmail4">Nama Bank <b class="text-danger"> *</b></label>
                                            <input type="text" class="form-control" placeholder="Nama Bank"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="inputEmail4">No Rekening Bank <b class="text-danger">
                                                    *</b></label>
                                            <input type="number" class="form-control" placeholder="No Rekening Bank"
                                                aria-label="Last name">
                                        </div>
                                    </div>

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Asli Pemilik Rekening <b class="text-danger">
                                                    *</b></label>
                                            <input type="text" class="form-control" id="inputEmail4"
                                                placeholder="Nama Asli Pemilik Rekening">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="float: right;">Next</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
@endpush
