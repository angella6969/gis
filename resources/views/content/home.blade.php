@extends('layout.main')
@section('container')
    {{-- <style>
        body {
            /* background-image: url("{{ asset('images/IMG_6915 (1).JPG') }}"); */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .position-absolute.top-0.start-0 {
            left: 0;
            top: 0;
        }

        .position-absolute.top-0.end-0 {
            right: 0;
            top: 0;
        }
    </style> --}}


    <div class="row">
        @include('layout.header')

        <br>
        <br>
        <br>
        <br>
        {{-- <div> --}}
            <div class="col-xl-4 col-md-6 col-sm-4 mb-2">
                <div class="card bg-warning text-white h-100 align-items-center">
                    <div class="card-body">
                        <h2>Hidrologi</h2>
                        <div class="table-responsive">
                            <table class="table text-white">

                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a href="/#" type="button" class="small text-white stretched-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"> Detail </a>
                        <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}

        <br>


        @include('layout.footer')
    </div>
@endsection
