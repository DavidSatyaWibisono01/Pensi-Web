<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Dashboard | Pensi Virtual</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ========================= CSS here ========================= -->
    <link rel="icon" href="assets/images/logo/logo-osis.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!} " />
    <link rel="stylesheet" href="{!! asset('assets/css/LineIcons.2.0.css') !!} " />
    <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!} " />
    <link rel="stylesheet" href="{!! asset('assets/css/tiny-slider.css') !!} " />
    <link rel="stylesheet" href="{!! asset('assets/css/glightbox.min.cs') !!} s" />
    <link rel="stylesheet" href="{!! asset('assets/css/main.css') !!} " />

</head>

<body>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible position-absolute w-100 fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo-img" href="/">
                                <img src="assets/images/logo/logo-osis.png" alt="">
                                <!-- <a class="osismpr-nav" href="#">OSIS MPR</a> -->
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/about-us" aria-label="Toggle navigation">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInCenter" data-wow-delay=".4s">OSIS MPR SMK WIKRAMA BOGOR</h1>
                        <p class="wow fadeInCenter" data-wow-delay=".6s">proudly present VIRTUAL ANNUAL FESTIVAL : Shine In Middile Of The Pandemic.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="{!! asset('assets/images/roket.png') !!}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Tour SMK Wikrama
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Mau tau lebih dalam tentang SMK Wikrama Bogor? Dalam Tour Virtual ini, kami akan mengajakmu untuk melihat gedung dan ruangan jurusan dari SMK Wikrama Bogor secara virtual. Tunggu apa lagi?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp size-card" data-wow-delay=".2s">
                        <p class="title-card"><b>CBT</b></p>
                        <img class="img-card" src="{!! asset('assets/img/images/Frame12.png') !!}" alt="">
                        <p class="short-card-s">Competence Based Training</p>
                        <div class="button">
                            <a href="/cbt-wikrama" class="btn">Kunjungi</a>
                        </div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp size-card" data-wow-delay=".2s">
                        <p class="title-card"><b>Tour</b></p>
                        <img class="img-card" src="{!! asset('assets/img/images/Frame21.png') !!}" alt="">
                        <p class="short-card">Mengelilingi lingkungan sekolah dengan view 360</p>
                        <div class="button">
                            <a href="https://virtualtoursmkwikrama.vercel.app/" target="_blank" class="btn">Kunjungi</a>
                        </div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp size-card" data-wow-delay=".2s">
                        <p class="title-card"><b>Ruang</b></p>
                        <p class="title-card-s"><b>Jurusan</b></p>
                        <img class="img-card" src="{!! asset('assets/img/images/Frame32.png') !!}" alt="">
                        <p class="short-card">Melihat ruang jurusan dengan view 360</p>
                        <div class="button">
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Kunjungi</a>
                        </div>
                    </div>
                    <!-- End Single Feature -->
                </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ruang Jurusan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <div class="text-center mb-5">
                            <img src="{!! asset('assets/images/logo/logo-wk.png') !!}" class="rounded">
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/pplg">
                                <button class="btn btnn-modal-jurusan">PPLG</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/dkv">
                                <button class="btn btnn-modal-jurusan">DKV</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/pemasaran">
                                <button class="btn btnn-modal-jurusan">PMN</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/tjkt">
                                <button class="btn btnn-modal-jurusan">TJKT</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/kuliner">
                                <button class="btn btnn-modal-jurusan">KLN</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/mplb">
                                <button class="btn btnn-modal-jurusan">MPLB</button>
                            </a>
                        </div>

                        <div class="button btn-modal-jurusan mb-3">
                            <a href="/hotel">
                                <button class="btn btnn-modal-jurusan">HTL</button>
                            </a>
                        </div>

                        </div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Achievement Area -->
    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div id="carouselExampleControls" class="carousel slide slides" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{!! asset('assets/images/sliders/slider1.png') !!}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                            <img src="{!! asset('assets/images/sliders/slider2.png') !!}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Virtual Annual Festival</h2>
                        <p>Pameran karya dari kompetensi keahlian adalah pameran karya dan inovasi yang telah dibuat oleh ke-7 kompetensi keahlian yang ada di SMK Wikrama. Pameran ini dilakukan secara daring dengan menerapkan konsep 3D melalui website sebagai media yang nanti akan dikunjungi oleh siswa/siswi SMK Wikrama dimanapun dan kapanpun. Dalam pameran virtual, para penikmat karya tidak harus datang ke lokasi pameran. Alih-alih semua orang dapat menikmati kreativitas siswa siswi SMK Wikrama Bogor melalui daring atau secara online.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Achievement Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                <img src="assets/images/logo/logo-osis.svg" alt="">
                                </a>
                            </div>
                            <p>Kunjungi juga sosial media kami dibawah ini</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                            <p class="copyright-text">Made by OSIS MPR WIKRAMA BOGOR</p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{!! asset('assets/js/bootstrap.min.js') !!} "></script>
    <script src="{!! asset('assets/js/wow.min.js') !!} "></script>
    <script src="{!! asset('assets/js/tiny-slider.js') !!} "></script>
    <script src="{!! asset('assets/js/glightbox.min.js') !!} "></script>
    <script src="{!! asset('assets/js/count-up.min.js') !!} "></script>
    <script src="{!! asset('assets/js/main.js') !!} "></script>
    <script type="text/javascript">

        //====== counter up
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>
