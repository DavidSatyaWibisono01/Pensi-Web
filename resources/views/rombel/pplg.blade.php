<?php
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Jurusan | Pengembangan Perangkat Lunak dan Gim</title>
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
        <h2><span>Pengembangan Perangkat Lunak dan Gim</span></h2>
        <div class="animated-text">
          <h3>Game Developer</h3>
          <h3>Web Developer</h3>
          <h3>Front-End Developer</h3>
        </div>
        <div class="media-icons">
          <a href="https://www.instagram.com/rplwikrama/" target="__blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="title reveal">
        <h2 class="section-title" id="virtual-tour">PPLG</h2>
      </div>
      <div class="content">
        <div class="img-box">
          <iframe  width="100%" height="350px" frameborder="0" title="Responsive iframe example" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="https://momento360.com/e/u/1854e2d319aa4e1184908277070a1ea4?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium"></iframe><span class="text-position-for-iframe mt-1" id="myBtnMdl"><span class="border-bottom-text">klik disini</span> untuk info detail view 360</span><br><br>
        </div>
          <h2 class="content-title">Pengembangan Perangkat Lunak dan Gim</h2>
          <p class="paragraph-text">Kompetensi keahlian Pengembangan Perangkat Lunak dan Gim atau PPLG adalah perubahan nama dari Rekayasa Perangkat Lunak atau RPL. Jurusan PPLG di SMK Wikrama dibuka pada tahun 2003, dan memperoleh akreditasi dari Badan Akreditasi Nasional Sekolah/Madrasah (BAN-SM) dengan nilai A.<br>Kompetensi keahlian PPLG SMK Wikrama sudah memiliki sertifikasi internasional seperti TOEIC Test (Test of English International Communication), Microsoft Technology Associate (Office, HTML 5, Database Fundamental).<br>Kompetensi Keahlian PPLG Wikrama memiliki 3 Laboratorium untuk menunjang praktik siswa yaitu Laboratorium Komputer, Software House, dan Ruang Teaching Factory.<br>Model Belajar yang diterapkan di PPLG SMK Wikrama adalah model Pembelajaran Teaching Factory.</p>
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
                <li>klik icon <span><img src="https://drive.google.com/uc?id=1dj7BNdChYbh3NXPWLaTmrJb0NugFEsG6" width="30" height="30"></span> untuk melihat ruangan jurusan secara fullscreen</li>
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
            <img src="https://drive.google.com/uc?id=1AQneMERE1OoJL3TjyJgMiFiVWncqDafO">
          </div>
        </div>
        <div class="column col-right reveal">
          <h1 class="content-title">Keahlian Pengembangan Perangkat Lunak dan Gim :</h1>
          <p class="paragraph-text">1. Memiliki kemampuan menjelaskan dan menerapkan ilmu matematika dan ilmu komputer dasar sebagai basis pembangunan sebuah perangkat lunak yang berkualitas. <br>2.Memiliki kemampuan menjelaskan, menerapkan, dan memilih berbagai teori, model, teknik dan teknologi yang tepat dalam pembangunan perangkat lunak yang berkualitas pada lingkungan berbasis web, desktop dan mobile.<br>3. Merancang solusi perangkat lunak berbasis web, desktop dan mobile dalam berbagai skala kompleksitas yang mengintegrasikan persoalan ethical, social, legal, security dan ekonomi.<br>4. Terampil menggunakan teknologi dan tools terkini dalam pembangunan perangkat lunak yang berkualitas pada lingkungan berbasis web dan mobile.<br>5. Menerapkan profesionalisme dalam berkarya sesuai dengan etika bidang Rekayasa Perangkat Lunak.<br>6. Mengikuti perkembangan berbagai teknik, teknologi dan tools baru dalam bidang rekayasa perangkat lunak pada lingkungan berbasis web, desktop dan mobile.</p>
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
            <!-- <img src="{!! asset('assets/images/jurusan/pplg/work1.jpg') !!} " alt=""> -->
            <img src="https://drive.google.com/uc?id=1dDzMUktbgZP4sjZD3iSPwzO_SaN4q7UM">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=101Zyt8bD_GPppOWlNfAngjvtu1ur9OxF">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1zLPxmCM1TN2JXnsB7h6NELB74UpdxE0T">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1_N_DAp4nNqWqBYfYY0xYGLBVbpOQE3yP">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1xi6RrMSS6qtz1wjkBQex_QlqxNLV6x5H">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="https://drive.google.com/uc?id=1fvCjK7ywS6Q8foLBYp8ZgMmj1gIi21Uh">
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
