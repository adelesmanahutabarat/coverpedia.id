<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                {!! $admin_sidebar->asUl(  ['class' => 'navbar-nav',], ['class' => 'dropdown-menu'] ) !!}
                {{-- <ul class="navbar-nav"> --}}
                    {{-- {!! $admin_sidebar->asUl( ['class' => 'navbar-nav'] ) !!} --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="home"></i> Dashboards <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <a href="index.html" class="dropdown-item">Ecommerce</a>
                            <a href="dashboard-analytics.html" class="dropdown-item">Analytics</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.coba.index') }}">
                            <i data-feather="layout"></i> Coba
                        </a>
                    </li> --}}
                {{-- </ul> --}}
                <!-- end navbar-->
            </div>
            <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div>

{{-- <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{route("backend.dashboard")}}">
            <img class="sidebar-brand-full" src="{{asset("img/backend-logo.jpg")}}" height="46" alt="{{ app_name() }}">
            <img class="sidebar-brand-narrow" src="{{asset("img/backend-logo-square.jpg")}}" height="46" alt="{{ app_name() }}">
        </a>
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>

    {!! $admin_sidebar->asUl( ['class' => 'sidebar-nav', 'data-coreui'=>'navigation', 'data-simplebar'], ['class' => 'nav-group-items'] ) !!}

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div> --}}



