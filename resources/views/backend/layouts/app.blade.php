<!DOCTYPE html>
<html lang="{{App::getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.png') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    <meta name="description" content="{{ setting('meta_description') }}">

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/ico" href="{{ asset('img/favicon.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    @stack('before-styles')

    {{-- <link rel="stylesheet" href="{{ mix('css/backend.css') }}"> --}}

    <!-- plugins -->
    <link href="{{ asset('template/assets/libs/flatpickr/flatpickr.min.css') }} " rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('template/assets/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('template/assets/css/app.min.css') }} " rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{ asset('template/assets/css/bootstrap-dark.min.css') }} " rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('template/assets/css/app-dark.min.css') }} " rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="{{ asset('template/assets/css/icons.min.css') }} " rel="stylesheet" type="text/css" />

    {{-- <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Bengali+UI&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: Ubuntu, "Noto Sans Bengali UI", Arial, Helvetica, sans-serif
        }
    </style> --}}

    @stack('after-styles')

    <x-google-analytics />

    @livewireStyles

</head>

<body class="loading" data-layout-mode="horizontal"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('backend.includes.topbar')
        <!-- end Topbar -->

        {{-- Topnav start --}}
        @include('backend.includes.topnav')
        <!-- end topnav-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">@yield('judul_content')</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        @yield('breadcrumbs-item')
                                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                        <li class="breadcrumb-item active">Horizontal</li> --}}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield('content')

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('backend.includes.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <h6 class="fw-medium px-3 m-0 py-2 text-uppercase bg-light">
                <span class="d-block py-1">Theme Settings</span>
            </h6>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <h6 class="fw-medium mt-4 mb-2 pb-1">Color Scheme</h6>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked />
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                        id="dark-mode-check" />
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Width -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Width</h6>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="fluid"
                        id="fluid-check" checked />
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="boxed"
                        id="boxed-check" />
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>

                <!-- Menu positions -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="menus-position" value="fixed"
                        id="fixed-check" checked />
                    <label class="form-check-label" for="fixed-check">Fixed</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable"
                        id="scrollable-check" />
                    <label class="form-check-label" for="scrollable-check">Scrollable</label>
                </div>

                <!-- Left Sidebar-->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light"
                        id="light-check" checked />
                    <label class="form-check-label" for="light-check">Light</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark"
                        id="dark-check" />
                    <label class="form-check-label" for="dark-check">Dark</label>
                </div>

                <!-- size -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default"
                        id="default-size-check" checked />
                    <label class="form-check-label" for="default-size-check">Default</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed"
                        id="condensed-check" />
                    <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small
                            size)</small></label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact"
                        id="compact-check" />
                    <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                </div>

                <!-- User info -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Sidebar User Info</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-user" value="fixed"
                        id="sidebaruser-check" />
                    <label class="form-check-label" for="sidebaruser-check">Enable</label>
                </div>


                <!-- Topbar -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Topbar</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="topbar-color" value="dark"
                        id="darktopbar-check" checked />
                    <label class="form-check-label" for="darktopbar-check">Dark</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="topbar-color" value="light"
                        id="lighttopbar-check" />
                    <label class="form-check-label" for="lighttopbar-check">Light</label>
                </div>


                <button class="btn btn-primary w-100 mt-4" id="resetBtn">Reset to Default</button>

                <a href="https://1.envato.market/shreyu_admin" class="btn btn-danger d-block mt-3"
                    target="_blank">
                    <i class="mdi mdi-basket me-1"></i> Purchase Now
                </a>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('template/assets/js/vendor.min.js') }} "></script>

    <!-- optional plugins -->
    <script src="{{ asset('template/assets/libs/moment/min/moment.min.js') }} "></script>
    {{-- <script src="{{ asset('template/assets/libs/apexcharts/apexcharts.min.js') }} "></script> --}}
    <script src="{{ asset('template/assets/libs/flatpickr/flatpickr.min.js') }} "></script>

    <!-- page js -->
    <script src="{{ asset('template/assets/js/pages/dashboard.init.js') }} "></script>

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.min.js') }} "></script>

</body>

</html>
