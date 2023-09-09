<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>BBWS Serayu Opak | GIS </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('edu-meeting') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('edu-meeting') }}/assets/css/lightbox.css">
    <style>
        /* @media (max-width: 768px) {
            #bg-image {
                width: 50%;
                height: auto;
            }
        } */
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
                            <li class="btn"><a href="#top" class="active">Home</a></li>
                            <li class="btn"><a href="#">Tentang</a></li>

                            @if (auth()->check())
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link px-3 bg-dark border-0">
                                    logout <span data-feather="log-out" class="align-text-bottom"></span>
                                </button>
                            </form>
                            @else
                            <li class="btn"><a href="/login">Login</a></li>
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
                            {{-- <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                            </div> --}}
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
                <iframe src="{{ asset('qgis2web/qgis2web_2023_09_08-11_14_50_809512/index.html') }}" width="100%"
                    height="900" id="my-iframe"></iframe>
                {{-- <div class="col-lg-4">
                    <div class="categories">
                        <h4>Meeting Catgories</h4>
                        <ul>
                            <li><a href="#">Sed tempus enim leo</a></li>
                            <li><a href="#">Aenean molestie quis</a></li>
                            <li><a href="#">Cras et metus vestibulum</a></li>
                            <li><a href="#">Nam et condimentum</a></li>
                            <li><a href="#">Phasellus nec sapien</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="meetings.html">All Upcoming Meetings</a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$22.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg"
                                            alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>New Lecturers Meeting</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$36.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg"
                                            alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Online Teaching Techniques</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg"
                                            alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>26</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Higher Education Conference</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$48.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg"
                                            alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>30</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Student Training Meetup</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        {{-- </div> --}}
    </section>





    {{-- <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Data 1</h4>
                                <p>deskripsi</p>
                                <a href="/qgis2webmap">link</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Data 2</h4>
                                <p>deskripsi</p>
                                <a href="">link</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Data 3</h4>
                                <p>deskripsi</p>
                                <a href="">link</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Data 4</h4>
                                <p>deskripsi</p>
                                <a href="">link</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Data 5</h4>
                                <p>deskripsi</p>
                                <a href="">link</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Upcoming Meetings</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Meeting Catgories</h4>
                        <ul>
                            <li><a href="#">Sed tempus enim leo</a></li>
                            <li><a href="#">Aenean molestie quis</a></li>
                            <li><a href="#">Cras et metus vestibulum</a></li>
                            <li><a href="#">Nam et condimentum</a></li>
                            <li><a href="#">Phasellus nec sapien</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="meetings.html">All Upcoming Meetings</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$22.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg"
                                            alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>New Lecturers Meeting</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$36.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg"
                                            alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Online Teaching Techniques</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg"
                                            alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>26</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Higher Education Conference</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$48.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg"
                                            alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>30</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Student Training Meetup</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>APPLY FOR BACHELOR DEGREE</h3>
                                <p>You are allowed to use this edu meeting CSS template for your school or university or
                                    business. You can feel free to modify or edit this layout.</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>APPLY FOR BACHELOR DEGREE</h3>
                                <p>You are not allowed to redistribute the template ZIP file on any other template
                                    website. Please contact us for more information.</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>About Edu Meeting HTML Template</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>If you want to get the latest collection of HTML CSS templates for your websites,
                                        you may visit <a rel="nofollow" href="https://www.toocss.com/"
                                            target="_blank">Too CSS website</a>. If you need a working contact form
                                        script, please visit <a href="https://templatemo.com/contact"
                                            target="_parent">our contact page</a> for more info.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>HTML CSS Bootstrap Layout</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna,
                                        maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed
                                        vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget
                                        nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio
                                        tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus
                                        sollicitudin tincidunt.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Please tell your friends</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit,
                                        at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur
                                        velit.<br><br>
                                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor
                                        sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Share this to your colleagues</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et
                                        malesuada fames ac ante ipsum primis in faucibus.<br><br>
                                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla
                                        pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi
                                        quis, convallis nisi.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Popular Courses</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="Course One">
                            <div class="down-content">
                                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$160</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="Course Two">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus vel</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Aenean molestie quis libero gravida</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$250</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>TemplateMo is the best website for Free CSS</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$270</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Web Design Templates at your finger tips</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$340</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Please visit our website again</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Responsive HTML Templates for you</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$400</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Download Free CSS Layouts for your business</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$430</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Morbi in libero blandit lectus cursus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$480</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Curabitur molestie dignissim purus</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>$560</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>A Few Facts About Our University</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">Succesed Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">126</div>
                                        <div class="count-title">Current Teachers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">New Students</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">32</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img
                                src="assets/images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="contact-us" id="contact">
        <div class="container">
            {{--
            <div class="row">
                <div class="col-lg-9 align-self-center"> --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">no</th>
                                                    <th scope="col">Nama Data Dasar Infrastruktur</th>
                                                    <th scope="col">Tahun Data</th>
                                                    <th scope="col">Nama DAS</th>
                                                    <th scope="col">Nama Sungai</th>
                                                    <th scope="col">Desa</th>
                                                    <th scope="col">Kecamatan</th>
                                                    <th scope="col">Kabupaten</th>
                                                    <th scope="col">Provinsi</th>
                                                    <th scope="col">data 9</th>
                                                    <th scope="col">data 10</th>
                                                    <th scope="col">data 11</th>
                                                    <th scope="col">data 12</th>
                                                    <th scope="col">data 13</th>
                                                    <th scope="col">data 14</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                    <td>data</td>
                                                </tr>
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
                {{-- <br>
                Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
                <br>
                Distibuted By: <a href="https://themewagon.com" target="_blank"
                    title="Build Better UI, Faster">ThemeWagon</a> --}}
            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('edu-meeting') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('edu-meeting') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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