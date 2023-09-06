<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    {{-- <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('tempedia/img/core-img/favicon.ico')}} ">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('tempedia/style.css')}} ">
    {{-- <link rel="stylesheet" href="{{ asset('tempedia/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('tempedia/css/font-awesome.min.css ') }}" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    @stack('css')
</head>

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

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

    @stack('js')

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('tempedia/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('tempedia/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('tempedia/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('tempedia/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('tempedia/js/active.js') }}"></script>
</body>

</html>
