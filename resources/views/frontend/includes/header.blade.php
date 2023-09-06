<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                    <!-- Nav brand -->
                    <a href="/" class="nav-brand"><img src="{{ asset('tempedia/img/core-img/logo.png') }} " alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('frontend.home') }} ">Home</a></li>
                                <!-- <li><a href="albums-store.html">Albums</a></li> -->
                                <li><a href="#">Katalog</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('frontend.artist.index') }}">Artist/Creator</a></li>
                                        <li><a href="{{ route('frontend.composer.index') }}">Composer</a></li>
                                        <li><a href="{{ route('frontend.song.index') }}">Original Song</a></li>
                                        <li><a href="{{ route('frontend.coversong.index') }} ">Cover Song</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('frontend.partner.index') }}">Partners</a></li>
                                <li><a href="{{ route('frontend.contact.index') }}">Contact</a></li>
                            </ul>

                            <!-- Login/Register & Cart Button -->
                            <div class="login-register-cart-button d-flex align-items-center">
                                <!-- Login/Register -->
                                <div class="login-register-btn mr-50">
                                    <a class="btn-login mr-2" href="{{ route('frontend.logins.index') }}" id="loginBtn">Login</a>
                                    <a class="btnreg btn-register" href="{{ route('frontend.daftar.index') }}" id="loginBtn">Register</a>
                                </div>


                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
