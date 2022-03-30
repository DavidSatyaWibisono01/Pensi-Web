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
            <!-- <a class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="mdi mdi-menu navbar-toggler-icon"></span></a> -->
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
                <!-- <a class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="mdi mdi-close navbar-toggler-icon pl-5"></span></a> -->
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
        <h1 class="font-weight-semibold">SHINE IN THE MIDDLE<br />OF PANDEMIC</h1>
        <h6 class="font-weight-normal text-muted">Proudly Present Virtual Annual Festival by : OSIS MPR Wikrama Bogor</h6>
        <div class="img-fluid">
        <img src="https://drive.google.com/uc?id=1MrIC8YkySEam6aOUMGq4g_PvqSfQwXZB">
        </div>
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
                    <img src="https://drive.google.com/uc?id=1eVOZMjzjb6oNoKWflshT3EneMBFAatal" width="50" alt="" class="mt-3" />
                    <p class="m-0 py-3 text-muted">Melihat ruang jurusan dengan view 360</p>
                    <!-- Trigger/Open The Modal -->
                    <button class="btn button-modal" style="background-color: #bbbbf2; border-radius: 5px" id="myBtnAk">Kunjungi</button>
                  </div>
                </div>
              </div>
              <div class="card customer-cards" style="margin: 0px 42px">
                <div class="card-body">
                  <div class="text-center">
                    <h6 class="card-title mb-3">CBT</h6>
                    <div class="content-divider m-auto"></div>
                    <img src="https://drive.google.com/uc?id=1cDp1qcKs6SXTFtuxCRRVi7ee9r3PLipP" width="50" alt="" class="mt-3" />
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
                    <img src="https://drive.google.com/uc?id=1Hc-R45RHgF4AJWuRPCeSjIy3yluxc7Ck" width="50" alt="" class="mt-3" />
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


        <!-- Modal -->
        <div id="myModalAk" class="modal" style="overflow: scroll;">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h4 class="text-center mt-2 mb-3"><b>Ruang Jurusan</b></h4>
            <img class="img-modal mt-2 mb-2" src="{!! asset('assets/images/logo/logo-wk.png') !!}">

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Pengembangan Perangkat Lunak dan Gim</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/pengembangan-perangkat-lunak-dan-gim">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Desain Komunikasi Visual</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/desain-komunikasi-visual">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Teknik Jaringan Komputer dan Telekomunikasi</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/teknik-jaringan-komputer-dan-telekomunikasi">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Manajemen Perkantoran dan Layanan Bisnis</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/manajemen-perkantoran-dan-layanan-bisnis">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Pemasaran</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/pemasaran">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Hotel</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/hotel">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

            <!-- Pembatas Card -->
              <div class="card-in-modal">
                <div class="container-in-modal">
                  <h5>Kuliner</h5>
                  <p class="btn-modal-card2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="button-modal button-modal-card" target="_blank" href="/kuliner">Kunjungi</a>
                </div>
              </div>
            <!-- End Pembatas Card -->

          </div>
        </div>
        <!-- End Modal -->

        <!-- Virtual Tour Pensi -->
        <section class="features-overview" id="features-section">
          <div class="content-header">
            <h2 class="mb-4">Virtual Annual Festival</h2>
            <div class="img-fluid-talent mb-4">
              <img id="myImgsk" src="https://drive.google.com/uc?id=1e2BwyyxEClB2HnuK8-B00u2rQ9_dvA1D">
            </div>
<!--             <div class="responsive-container">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/Jbn5SQTL5E0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> -->
            <h6 class="section-subtitle-vid-pensi text-muted">
              Pameran karya dari kompetensi keahlian adalah pameran karya dan inovasi yang telah dibuat oleh ke-7 kompetensi keahlian yang ada di SMK Wikrama. Pameran ini dilakukan secara daring dengan menerapkan konsep 3D melalui website
              sebagai media yang nanti akan dikunjungi oleh siswa/siswi SMK Wikrama dimanapun dan kapanpun. Dalam pameran virtual, para penikmat karya tidak harus datang ke lokasi pameran. Alih-alih semua orang dapat menikmati kreativitas
              siswa siswi SMK Wikrama Bogor melalui daring atau secara online.
            </h6>
          </div>

        <!-- The Modal -->
        <div id="myModalsk" class="modalvidpensi">
            <span class="closed">&times;</span>
            <iframe allowfullscreen="" class="modal-contents" frameborder="0" height="450" src="https://www.youtube.com/embed/Jbn5SQTL5E0" style="border: 0" width="800"></iframe>
            <div id="captionsk"></div>
        </div>
        </section>
        <!-- End Virtual Tour Pensi -->

        <!-- Testimoni Guru -->
        <!-- Isi Disini -->
        <!-- End Testimoni Guru -->
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
            <div class="col-12 col-md-6 col-lg-3 grid-margins">
              <h5 class="color-footer pb-2">Masukkan Saran & Kritikmu!</h5>
              <p class="color-footer">Saran dan kritikmu akan sangat berguna bagi kami</p>
              <form action="{{url('pesan')}}" method="post">
                @csrf
                <input type="text" name="isi" class="form-control" id="" placeholder="Masukkan Saran dan Kritik" minlength="5" maxlength="50">
                <div class="pt-3">
                  <button class="btn btn-dark" type="submit">Kirim</button>
                </div>
              </form>
            </div>
            <div class="col-12 col-md-6 col-lg-3 grid-margins">
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


    <script>
      // Get the modal
      var modal = document.getElementById("myModalAk");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtnAk");

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
    <!-- Vid Pensi -->
    <script src=" {!! asset('assets/vendors/jquery/jquery.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/bootstrap/bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/aos/js/aos.js') !!} "></script>
    <script src=" {!! asset('assets/js/landingpage.js') !!} "></script>
    <script src=" {!! asset('assets/js/testimoni.js') !!} "></script>
    <script src=" {!! asset('assets/js/modal-vid-pensi.js') !!} "></script>
  </body>
</html>
