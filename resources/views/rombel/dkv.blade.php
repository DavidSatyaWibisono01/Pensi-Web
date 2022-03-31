<?php
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Jurusan | Desain Komunikasi Visual</title>
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
      	<h2><span>Desain Komunikasi Visual</span></h2>
        <div class="animated-text">
          <h3>Desain Grafis</h3>
          <h3>Videografi</h3>
          <h3>Animasi</h3>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/mm.wikrama/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="title reveal">
        <h2 class="section-title" id="virtual-tour">DKV</h2>
      </div>
      <div class="content">
      	<div class="img-box">
      		<iframe src="https://momento360.com/e/u/b0b5c78d975f43eb809e72320838a471?utm_campaign=embed&utm_source=other&heading=97.4&pitch=-2.9&field-of-view=75&size=medium" width="100%" height="350px" frameborder="0" title="Responsive iframe example" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe><span class="text-position-for-iframe mt-1" id="myBtnMdl"><span class="border-bottom-text">klik disini</span> untuk info detail view 360</span><br><br>
      	</div>
          <h2 class="content-title">Desain Komunikasi Visual</h2>
          <p class="paragraph-text">Kompetensi keahlian DKV SMK Wikrama Bogor dirikan pada tahun 2011 dan sudah mendapat akreditasi A. dan memperoleh akreditasi dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-SM) dengan nilai A. Keunggulan jurusan DKV: Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll. Sertifikasi: LSP (Lembaga Sertifikasi Profesi), BNSP (Badan Nasional Sertifikasi Profesi), TOEIC (Test of English for International Communication), Adobe.<br></p>
        </div>
      </div>
    </section>

    <!-- The Modal -->
    <div id="myModall" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h5 class="mt-3"><b>Pengertian View 360</b></h5>
        <p>View 360 adalah sebuah fitur yang dimana kita dapat melihat sebuah objek dengan pemandangan full yang dapat kita gerakkan sesuai arah yang kita inginkan</p>
        <br>
        <h5><b>Cara menggunakan View 360</b></h5>
          <ol class="ml-3">
            <li>Sentuh Objek pada gambar yang akan digerakkan, gambar bisa digerakkan ke seluruh arah sesuai keinginan kita</li>
            <li>klik icon 'perbesar layar' untuk melihat ruangan jurusan secara fullscreen</li>
          </ol>
      </div>

    </div>

    <section class="skills">
      <div class="title reveal">
        <h2 class="section-title" id="keahlian">Keahlian</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="https://drive.google.com/uc?id=1sg94p03CrMKx0890YjnFh_Pi7lnngpi-">
          </div>
        </div>
        <div class="column col-right reveal">
          <h1 class="content-title">Keahlian Jurusan DKV:</h1>
          <p class="paragraph-text">Kompetensi keahlian DKV menjawab tantangan perkembangan komunikasi visual, desain grafis dan multimedia. Materi yang dipelajari antara lain pengetahuan dasar tentang seni terapan, fotografi digital (tata cahaya, komposisi, lighting studio), videografi (Adobe Premiere, Adobe After Effect), desain grafis (Adobe Photoshop, Adobe Illustrator, Adobe Indesign), kemampuan grafis 3D (Blender, 3D Studio Max), kemampuan animasi (HTML, Adobe Flash) dan proses kreatif dalam membuat suatu karya audio visual.<br><br>Lulusan DKV Wikrama dapat memiliki kesempatan kerja yang luas dibidang periklanan online/offline, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran.<br><br>Tuntutan perkembangan zaman menjadikan teknologi berkembang sedemikian pesat, hingga hampir semua Perusahaan membutuhkan seoarang designer grafis untuk keperluan promosi melalui media social dan media online yang lain, ini adalah peluang besar bagi lulusan jurusan DKV.</p>
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
            <img src="https://drive.google.com/uc?id=1zNZUEumpWAl-QVknCPeRiXD0f9o_OYh0">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1jNW3L8AS4atK6p7weeLKgWOv2_TBt4nx">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1E8CLyG9_awSxhKx2gvRy5tgLHk8MSt5B">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1mbfveyGqVE591ddTk_aQDeWuaKEBiPVa">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1v49M4vjfrRaBEdq0Pbdl91Tm2bsYjNpD">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1Dif4NYCMosnB_rv8wM-oFU7Vtwk_BTj8">
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


    <script>
    // Get the modal
    var modal = document.getElementById("myModall");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtnMdl");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    <script src="{!! asset('assets/js/script-jurusan.js') !!}" charset="utf-8"></script>
    <script src=" {!! asset('assets/vendors/jquery/jquery.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/bootstrap/bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/aos/js/aos.js') !!} "></script>
    <script src=" {!! asset('assets/js/landingpage.js') !!} "></script>

  </body>
</html>
