<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('src') }}/assets/images/logos/favicon-16x16.png" />
    <title>BBWS Serayu Opak | GIS </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('edu-meeting') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/lightbox.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .nowrap td {
            white-space: nowrap;
        }

        table {
            /* table-layout: fixed; */
            /* Tetapkan lebar kolom tetap */
            width: 100%;
            /* Lebar tabel 100% dari container */
        }

        th,
        td {
            padding: 10px;
            white-space: nowrap;
            /* Teks dalam sel tidak akan dienter */
            overflow: hidden;
            /* Hindari pemotongan teks yang terlalu panjang */
            text-overflow: ellipsis;
            /* Teks yang terlalu panjang akan muncul dengan tanda elipsis (titik-titik) */
        }

        th.col-center {
            text-align: center;
        }

        td.col-center {
            text-align: center;
        }



        /* Gaya untuk header kelompok Penerima */
        th.group-penerima {
            background-color: lightblue;
            text-align: center;
        }

        /* Gaya untuk header kelompok Progres */
        th.group-progres {
            background-color: lightgreen;
            text-align: center;
        }
    </style>
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting


-->
</head>

<body>

    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">

                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/newhome" class="logo">
                            WEBGIS P3-TGAI BBWS Serayu Opak
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="btn"><a href="#top" class="active">BERANDA</a></li>
                            <li class="btn"><a href="#">Tentang</a></li>

                            @if (auth()->check())
                                <li class="btn"><a href="/dashboard">Dashboard</a></li>
                            @else
                                <li class="btn"><a href="/login">MASUK</a></li>
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <img src="images/P3TGAI FHD.jpg" alt="Deskripsi Gambar" id="bg-image" style="width: 100%; height: 80ch;">


        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6></h6>
                            <h2>Selamat Datang Di WEBGIS P3-TGAI</h2>
                            <p>Program Percepatan Peningkatan Tata Guna Air Irigasi (P3-TGAI) adalah program perbaikan,
                                rehabilitasi atau peningkatan jaringan irigasi dengan berbasis peran serta masyarakat
                                petani yang dilaksanakan oleh Perkumpulan Petani Pemakai Air (P3A), Gabungan Perkumpulan
                                Petani Pemakai Air (GP3A) atau Induk Perkumpulan Petani Pemakai Air (IP3A)</p>
                            <br>
                            <p>
                                Aplikasi ini ditujukan sebagai portal informasi kegiatan P3-TGAI BBWS Serayu Opak
                                berbasis peta online (Webgis)
                                yang menginformasikan lokasi dan data teknis kegitan P3-TGAI
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Maps P3-TGAI</h2>
                </div>
            </div>
            <iframe src="{{ asset('qgis2web/qgis2web_2023_09_12-16_28_04_616599/index.html') }}" width="100%"
                height="700" id="my-iframe"></iframe>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            {{--
            <div class="row">
                <div class="col-lg-9 align-self-center"> --}}
            <div class="row">
                <div class="col-lg-12">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="table-responsive align-content-center">
                                {{-- @foreach ($penerimas as $penerima) --}}
                                {{-- <td>{{ $penerimas}}</td> --}}
                                {{-- @endforeach --}}
                                <table class="table table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th colspan="11" class="table-active group-header group-penerima">Data
                                                Penerima P3-TGAI</th>
                                            <th colspan="9" class="table-active group-header group-progres">Data
                                                Progres</th>
                                        </tr>
                                        <tr>
                                            <!-- Kolom Penerima -->
                                            <th scope="col">No</th>
                                            <th scope="col">Daerah Irigasi</th>
                                            <th scope="col">Nama P3-TGAI</th>
                                            <th scope="col">Kabupaten</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Desa</th>
                                            <th scope="col">Irigasi Terbangun</th>
                                            <th scope="col">Irigasi Belum Terbangun</th>
                                            <th scope="col">Pola Tanam</th>
                                            <th scope="col">Jenis Vegetasi</th>
                                            <th scope="col">Mendapatkan P4-ISDA/P3-TGAI</th>

                                            <!-- Kolom Progres -->
                                            <th scope="col">Pengerjaan</th>
                                            <th scope="col">Jenis Pekerjaan</th>
                                            <th scope="col">Langsir Material</th>
                                            <th scope="col">Jarak Langsir</th>
                                            <th scope="col">Beda Tinggi Langsir</th>
                                            <th scope="col">Metode Langsir</th>
                                            <th scope="col">Kondisi Lokasi</th>
                                            <th scope="col">Kondisi Tanah</th>
                                            <th scope="col">Potensi Masalah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalRows = count($penerimas);
                                            $rowCounter = 0;
                                        @endphp

                                        @foreach ($penerimas as $penerima)
                                            @if ($penerima->progres->isNotEmpty())
                                                @foreach ($penerima->progres as $progres)
                                                    <tr>
                                                        <td>{{ ++$rowCounter }}</td>
                                                        <td>{{ $penerima->DaerahIrigasi }}</td>
                                                        <td>{{ $penerima->names }}</td>
                                                        <td>{{ $penerima->Kabupaten }}</td>
                                                        <td>{{ $penerima->Kecamatan }}</td>
                                                        <td>{{ $penerima->Desa }}</td>
                                                        <td>{{ $penerima->IrigasiDesaTerbangun }}</td>
                                                        <td>{{ $penerima->IrigasiDesaBelumTerbangun }}</td>
                                                        <td>{{ $penerima->PolaTanamSaatIni }}</td>
                                                        <td>{{ $penerima->JenisVegetasi }}</td>
                                                        <td>{{ $penerima->MendapatkanP4_ISDA }}</td>

                                                        <td>{{ $progres->TahunPengerjaan }}</td>
                                                        <td>{{ $progres->jenisPekerjaan }}</td>
                                                        <td>{{ $progres->langsirMaterial }}</td>
                                                        <td>{{ $progres->jarakLangsir }}</td>
                                                        <td>{{ $progres->bedaLangsir }}</td>
                                                        <td>{{ $progres->metodeLangsir }}</td>
                                                        <td>{{ $progres->KondisiLokasiPekerjaan }}</td>
                                                        <td>{{ $progres->KondisiTanahLokasiPekerjaan }}</td>
                                                        <td>{{ $progres->PotensiMasalahSosial }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>{{ ++$rowCounter }}</td>
                                                    <td>{{ $penerima->DaerahIrigasi }}</td>
                                                    <td>{{ $penerima->names }}</td>
                                                    <td>{{ $penerima->Kabupaten }}</td>
                                                    <td>{{ $penerima->Kecamatan }}</td>
                                                    <td>{{ $penerima->Desa }}</td>
                                                    <td>{{ $penerima->IrigasiDesaTerbangun }}</td>
                                                    <td>{{ $penerima->IrigasiDesaBelumTerbangun }}</td>
                                                    <td>{{ $penerima->PolaTanamSaatIni }}</td>
                                                    <td>{{ $penerima->JenisVegetasi }}</td>
                                                    <td>{{ $penerima->MendapatkanP4_ISDA }}</td>

                                                    <td colspan="8">Dalam Progres</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                            {{-- <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message"
                                                placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div> --}}
                        </div>
                    </form>
                    {{--
                        </div> --}}
                    {{--
                    </div> --}}
                </div>
                {{-- <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@meeting.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.meeting.edu</span>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="footer">
            <p>© 2023 BBWS Serayu Opak
            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('edu-meeting') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('edu-meeting') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('edu-meeting') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/lightbox.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/video.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/slick-slider.js"></script>
    <script src="{{ asset('edu-meeting') }}/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
    <script>
        document.getElementById('my-iframe').addEventListener('wheel', function(e) {
            if (!e.ctrlKey) {
                e.preventDefault();
            }
        });
    </script>
</body>

</body>

</html>
