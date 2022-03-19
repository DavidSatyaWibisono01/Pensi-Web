<?php
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Jurusan | Hotel</title>
    <link rel="stylesheet" href="{!! asset('assets/css/style-jurusan.css') !!}">
    <link rel="stylesheet" href=" {!! asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/owl-carousel/css/owl.theme.default.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/mdi/css/materialdesignicons.min.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/aos/css/aos.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/css/style.min.css') !!}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header id="header-section">
      <div class="menu-btn"></div>
      <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar" style="padding: 10px">
        <div class="container">
          <div class="navbar-brand-wrapper d-flex w-100">
            <img class="size-header" src=" {!! asset('assets/images/landing-page/logo-wk.png') !!}" alt="" width="45px" height="45px" />
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-menu navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
              <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                <div class="navbar-collapse-logo">
                  <img src="images/Group2.svg" alt="" />
                </div>
                <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                </button>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#body">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#virtual-tour">Virtual Tour</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#keahlian">Keahlian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about-dkv">Dokumentasi</a>
              </li>
              <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                <a class="btn btn-us" href="/dashboard">Dashboard</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="main" id="main">
      <div class="content">
      	<h2><span>Hotel</span></h2>
        <div class="animated-text">
          <h3>Houskeeping</h3>
          <h3>Public Area</h3>
          <h3>Loundry</h3>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="title reveal">
        <h2 class="section-title" id="virtual-tour">Hotel</h2>
      </div>
      <div class="content">
      	<div class="img-box">
      		<img class="img-jurusan" src="{!! asset('assets/images/jurusan/hotel/hotel.jpeg') !!}" alt=""><br><br>
      	</div>
          <h2 class="content-title">Hotel</h2>
          <p class="paragraph-text">Bidang Keahlian Pariwisata merupakan salah satu fokus program Revitalisasi SMK dalam rangka meningkatkan daya saing SDM Indonesia. Seiring dengan nawacita presiden Republik Indonesia bapak Jokowidodo bidang Pariwisata, Seni, dan Industri Kreatif mulai dikembangkan untuk menciptakan sumber daya unggul dan kreatif. Merespon hal tersebut SMK WIKRAMA BOGOR membuka jurusan PERHOTELAN di tahun 2017. Hal ini bertujuan salah satunya untuk memenuhi SDM dan menciptakan tenaga kerja yang terampil di bidang Perhotelan. Kompetensi Keahlian Hotel SMK Wikrama Bogor menjadi jurusan ke-7 di SMK Wikrama Bogor, dengan nilai akreditasi B (baik)<br></p>
        </div>
      </div>
    </section>

    <section class="skills">
      <div class="title reveal">
        <h2 class="section-title" id="keahlian">Keahlian</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="{!! asset('assets/images/jurusan/hotel/img1.jpg') !!} " alt="">
          </div>
        </div>
        <div class="column col-right reveal">
          <h1 class="content-title">Keahlian Jurusan Hotel :</h1>
          <p class="paragraph-text">Pengetahuan pariwisata, layanan telepon operator, layanan bellboy/porter, layanan reservasi, layanan resepsionis, layanan dokumen transaksi keuangan, layanan houskeeping meliputi layanan kamar, public area dan loundry (binatu).  Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.<br><br><b>Sertifikasi:</b> TOEIC dan sertifikasi pariwisata dari BNSP.</p>
        </div>
      </div>
    </section>
 
    <section class="work">
      <div class="title reveal">
        <h2 class="section-title" id="about-dkv">Dokumentasi</h2>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work1.jpg') !!} " alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work2.jpg') !!} " alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work3.jpg') !!} " alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work4.jpg') !!} " alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work5.jpg') !!} " alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="{!! asset('assets/images/jurusan/hotel/work6.jpg') !!} " alt="">
          </div>
        </div>
      </div>
    </section>


    <div class="banner-footer">
      <div class="container">
          <footer>
            <p class="color-footer text-center pt-4">&copy;2022<a href="https://www.instagram.com/om__smkwikrama" class="color-footer px-1">OSIS MPR Wikrama.</a>All rights reserved.</p>
          </footer>
      </div>
  </div>

    <script src="{!! asset('assets/js/script-jurusan.js') !!}" charset="utf-8"></script>
    <script src=" {!! asset('assets/vendors/jquery/jquery.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/bootstrap/bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/aos/js/aos.js') !!} "></script>
    <script src=" {!! asset('assets/js/landingpage.js') !!} "></script>

  </body>
</html>
