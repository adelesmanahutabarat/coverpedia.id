<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">

                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="uil uil-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="search"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                            aria-label="search here">
                    </form>
                </div>
            </li>

            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="globe"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('template/assets/images/flags/us.jpg') }} " alt="user-image" class="me-1"
                            height="12">
                        <span class="align-middle">English</span>
                    </a>

                </div>
            </li>

            {{-- <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('template/assets/images/users/avatar-1.jpg') }} " alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        Nik Patel <i class="uil uil-angle-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <a href="pages-profile.html" class="dropdown-item notify-item">
                        <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                    </a>

                    <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                        <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="pages-logout.html" class="dropdown-item notify-item">
                        <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                    </a>

                </div>
            </li> --}}

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle" >
                    <i data-feather="power" style="color:red;"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ route('backend.home') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('template/assets/images/logo-sm.png') }} " alt="" height="24">
                    <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('template/assets/images/logo-dark.png') }} " alt="" height="24">
                    <!-- <span class="logo-lg-text-light">S</span> -->
                </span>
            </a>

            <a href="{{ route('backend.home') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('template/assets/images/logo-sm.png') }} " alt="" height="24">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('template/assets/images/logo-light.png') }} " alt="" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile">
                    <i data-feather="menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                    data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            {{-- <li class="dropdown d-none d-xl-block">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="uil uil-angle-down"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-bag me-1"></i><span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-user-plus me-1"></i><span>Create Users</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-chart-pie me-1"></i><span>Revenue Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-cog me-1"></i><span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-question-circle me-1"></i><span>Help & Support</span>
                    </a>

                </div>
            </li> --}}

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
