<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BBWSSO | Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('src') }}/assets/images/logos/favicon-16x16.png" />
    <link rel="stylesheet" href="{{ asset('src') }}/assets/css/styles.min.css" />
</head>

<style>
    body {
        /* background-color: rgb(31,38,44) */
    }
</style>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('src') }}/assets/images/logos/dark-logo.svg" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                @include('layout.sidebar')
            </div>
        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>

                    </ul>
                    @include('layout.navbar')
                </nav>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech">
                        @yield('container')
                    </div>
                </div>
                @include('layout.footer')
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('src') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('src') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"
    integrity="sha512-ToL6UYWePxjhDQKNioSi4AyJ5KkRxY+F1+Fi7Jgh0Hp5Kk2/s8FD7zusJDdonfe5B00Qw+B8taXxF6CFLnqNCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{ asset('src') }}/assets/js/sidebarmenu.js"></script>
    <script src="{{ asset('src') }}/assets/js/app.min.js"></script>
    {{-- <script src="{{ asset('src') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
    <script src="{{ asset('src') }}/assets/libs/simplebar/dist/simplebar.js"></script>
    {{-- <script src="{{ asset('src') }}/assets/js/dashboard.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</body>


</html>
