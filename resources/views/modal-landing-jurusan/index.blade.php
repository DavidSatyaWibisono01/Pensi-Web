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
    
    <!-- 3 Modal Utama Pensi -->
    <div class="modal fade" id="ModalChoseJurusan" tabindaria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <script src=" {!! asset('assets/vendors/jquery/jquery.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/bootstrap/bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') !!} "></script>
    <script src=" {!! asset('assets/vendors/aos/js/aos.js') !!} "></script>
    <script src=" {!! asset('assets/js/landingpage.js') !!} "></script>
  </body>
</html>
