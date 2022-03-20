<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard | Virtual Tour Wikrama</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="assets/images/logo/logo-osis.png" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/owl-carousel/css/owl.theme.default.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/mdi/css/materialdesignicons.min.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/vendors/aos/css/aos.css') !!}" />
    <link rel="stylesheet" href=" {!! asset('assets/css/style.min.css') !!}" />
  </head>
  <body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
      <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
        <div class="container">
          <div class="navbar-brand-wrapper d-flex w-100">
            <img class="mt-2" src=" {!! asset('assets/images/landing-page/logo-wk.png') !!}" alt="" width="45px" height="45px" />
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
                <a class="nav-link" href="#features-section">Talent Digital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-details-section">Sosmed Kami</a>
              </li>
              <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                <a class="btn btn-us" href="/about-us">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="banner-landing">
      <div class="container">
        <h1 class="font-weight-semibold">SHINE IN MIDDLE<br />OF THE PANDEMIC</h1>
        <h6 class="font-weight-normal text-muted pb-5">Proudly Present Virtual Annual Festival by : OSIS MPR Wikrama Bogor</h6>
        <img src=" {!! asset('assets/images/landing-page/roket-landing.png') !!}" class="img-fluid" />
      </div>
    </div>
    <div class="content-wrapper">
      <div class="container">
        <!-- 3 Modal Utama Pensi -->
        <section class="customer-feedback" id="virtual-tour">
          <div class="row">
            <div class="col-12 text-center pb-5">
              <h2>Virtual Tour SMK Wikrama Bogor</h2>
              <h6 class="section-subtitle text-muted m-0">
                Mau tau lebih dalam tentang SMK Wikrama Bogor? Dalam Tour Virtual ini, kami akan mengajakmu untuk melihat gedung dan ruangan jurusan dari SMK Wikrama Bogor secara virtual. Tunggu apa lagi?
              </h6>
            </div>
            <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards" style="margin: 0px 42px">
                <div class="card-body">
                  <div class="text-center">
                    <h6 class="card-title mb-3">Ruang Jurusan</h6>
                    <div class="content-divider m-auto"></div>
                    <img src=" {!! asset('assets/images/landing-page/meteorite.png') !!}" width="89" height="89" alt="" class="mt-3" />
                    <p class="m-0 py-3 text-muted">Melihat ruang jurusan dengan view 360</p>
                    <div class="btn button-modal" style="background-color: #bbbbf2; border-radius: 5px">
                      @extends('modal-landing-jurusan/index')
                      <a data-toggle="modal" data-target="#ModalChoseJurusan">Kunjungi</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card customer-cards" style="margin: 0px 42px">
                <div class="card-body">
                  <div class="text-center">
                    <h6 class="card-title mb-3">CBT</h6>
                    <div class="content-divider m-auto"></div>
                    <img src="{!! asset('assets/images/landing-page/astronaut.png') !!}" width="89" height="89" alt="" class="mt-3" />
                    <p class="m-0 py-3 text-muted">
                      Pelatihan <br />
                      Competence Based Training
                    </p>
                    <div class="btn button-modal" style="background-color: #bbbbf2; padding: 12px 25px; border-radius: 5px">
                      <a href="/cbt-wikrama">Kunjungi</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card customer-cards" style="margin: 0px 42px">
                <div class="card-body">
                  <div class="text-center">
                    <h6 class="card-title mb-3">Virtual Tour</h6>
                    <div class="content-divider m-auto"></div>
                    <img src="{!! asset('assets/images/landing-page/black-hole.png') !!}" width="89" height="89" alt="" class="mt-3" />
                    <p class="m-0 py-3 text-muted">Mengelilingi lingkungan sekolah dengan view 360</p>
                    <div class="btn button-modal" style="background-color: #bbbbf2; padding: 12px 25px; border-radius: 5px">
                      <a href="https://virtualtoursmkwikrama.vercel.app/" target="_blank">Kunjungi</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section>
        <!-- End 3 Modal Utama Pensi -->

        <!-- 3 Modal Utama Pensi -->
        <section class="features-overview" id="features-section">
          <div class="content-header">
            <h2>Virtual Annual Festival</h2>
            <div class="responsive-container">
              <iframe allowfullscreen="" class="responsive-iframe" frameborder="0" height="450" src="https://www.youtube.com/embed/Jbn5SQTL5E0" style="border: 0" width="800"></iframe>
              <!-- <iframe class="responsive-iframe" src="https://www.youtube.com/embed/Jbn5SQTL5E0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
            <h6 class="section-subtitle text-muted">
              Pameran karya dari kompetensi keahlian adalah pameran karya dan inovasi yang telah dibuat oleh ke-7 kompetensi keahlian yang ada di SMK Wikrama. Pameran ini dilakukan secara daring dengan menerapkan konsep 3D melalui website
              sebagai media yang nanti akan dikunjungi oleh siswa/siswi SMK Wikrama dimanapun dan kapanpun. Dalam pameran virtual, para penikmat karya tidak harus datang ke lokasi pameran. Alih-alih semua orang dapat menikmati kreativitas
              siswa siswi SMK Wikrama Bogor melalui daring atau secara online.
            </h6>
          </div>
        </section>
        <!-- End 3 Modal Utama Pensi -->
      </div>
    </div>

    <!-- 3 Modal Utama Pensi -->
    <div class="banner-footer">
      <div class="container">
        <section class="contact-details" id="contact-details-section">
          <div class="row text-center text-md-left">
            <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="color-footer">Powered by :</h5>
              <img src="{!! asset('assets/images/landing-page/logo-osis-footer.png') !!}" width="65%" />
              <h5 class="color-footer mt-4">Supported by :</h5>
              <a href="https://kejar.id" target="_blank"><img src="{!! asset('assets/images/landing-page/logo-kejarid-footer.png') !!}" width="50%" /></a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="color-footer pb-2">Masukkan Saran & Kritikmu!</h5>
              <p class="color-footer">Saran dan kritikmu akan sangat berguna bagi kami</p>
              <form>
                <input type="text" class="form-control" id="" placeholder="Masukkan Saran dan Kritik" />
              </form>
              <div class="pt-3">
                <button class="btn btn-dark">Kirim</button>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="color-footer pb-2">Follow juga sosial media kami</h5>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="#"><span class="mdi mdi-facebook"></span></a>
                <a href="#"><span class="mdi mdi-instagram"></span></a>
              </div>
            </div>
          </div>
        </section>
        <footer class="border-top">
          <p class="color-footer text-center pt-4">&copy;2022<a href="https://www.instagram.com/om__smkwikrama" class="color-footer px-1">OSIS MPR Wikrama.</a>All rights reserved.</p>
        </footer>
      </div>
    </div>
    <!-- End 3 Modal Utama Pensi -->

    <script src=" {!! asset('assets/vendors/jquery/jquery.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/bootstrap/bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/aos/js/aos.js') !!} "></script>
    <script src=" {!! asset('assets/js/landingpage.js') !!} "></script>
  </body>
</html>
