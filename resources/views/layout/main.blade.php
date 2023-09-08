<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images\android-chrome-512x512.png') }}">
    {{-- <link rel="manifest" href="/site.webmanifest"> --}}

    <title>Document</title>
    @include('layout.link')
</head>
<script src="https://unpkg.com/feather-icons"></script>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container">
                @include('layout.header')
                <div class="row">
                    @yield('container')
                </div>
                @include('layout.footer')
            </div>
        </div>
    </div>
</body>


</html>
