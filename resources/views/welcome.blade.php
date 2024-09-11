<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="assets/images/logo-hologram.svg" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <link
      href="assets/plugins/metismenu/css/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="assets/css/app.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Jas Hujan Indonesia</title>
  </head>

  <body>
    <!--wrapper-->
    <div class="wrapper">
      <div class="container py-3 text-center">
        <div
          class="p-3 radius-30 mb-3 transform-effect"
          style="background-color: rgb(0, 195, 255)"
        >
          <h5 class="mb-0 text-white">
            Jas Hujan Indonesia: Perlindungan Maksimal di Setiap Hujan
          </h5>
        </div>
        <div class="mb-4">
        @foreach ($galleries as $gallery)
            
        <img
          src="{{ Storage::url($gallery->image) }}"
          alt="jas hujan indonesia"
          class="img-fluid radius-10 transform-effect"
        />
        @endforeach
        </div>
        <div class="row mb-lg-3">
          <div class="col-12 col-lg-6 mb-3">
            <img
              src="assets/images/landing-page/ss-1.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
          <div class="col-12 col-lg-6 mb-3">
            <img
              src="assets/images/landing-page/ss-2.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
        </div>
        <div class="row mb-lg-3">
          <div class="col-12 col-lg-6 mb-3">
            <img
              src="assets/images/landing-page/green-brown-desc.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
          <div class="col-12 col-lg-6 mb-3">
            <img
              src="assets/images/landing-page/black-blue-desc.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
        </div>
        <div
          class="box-custom radius-30 transform-effect"
          style="margin-bottom: 80px"
        >
          <div class="box-custom-body text-black font-18">
            Temukan kenyamanan dan perlindungan terbaik dengan jas hujan premium
            kami. Di Jas Hujan Indonesia, kami menawarkan jas hujan berkualitas
            tinggi dengan berbagai pilihan warna: Hijau, Coklat, Hitam, dan
            Biru.
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-3 mb-3">
            <img
              src="assets/images/landing-page/black.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
          <div class="col-12 col-lg-3 mb-3">
            <img
              src="assets/images/landing-page/blue.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
          <div class="col-12 col-lg-3 mb-3">
            <img
              src="assets/images/landing-page/brown.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
          <div class="col-12 col-lg-3 mb-3">
            <img
              src="assets/images/landing-page/green.jpg"
              alt="jas hujan indonesia"
              class="img-fluid radius-10 transform-effect"
            />
          </div>
        </div>

        <div
          class="p-3 radius-30 mb-3 transform-effect"
          style="background-color: rgb(0, 195, 255)"
        >
          <h5 class="mb-0 text-white">Keunggulan Produk Kami:</h5>
        </div>

        <div class="row">
          <div class="col-12 col-lg-3 mb-3 d-flex">
            <div class="box-custom radius-30 w-100 transform-effect">
              <div
                class="box-custom-body font-18 text-black"
                style="padding: 24px"
              >
                <h5 class="mb-4">Waterproof & Windproof</h5>
                <p class="font-18 text-black mb-0">
                  Lindungi diri Anda dari hujan deras dan angin kencang dengan
                  teknologi tahan air dan angin kami.
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-3 d-flex">
            <div class="box-custom radius-30 w-100 transform-effect">
              <div
                class="box-custom-body font-18 text-black"
                style="padding: 24px"
              >
                <h5 class="mb-4">Bahan Tebal & Elastis</h5>
                <p class="font-18 text-black mb-0">
                  Terbuat dari bahan yang tebal dan elastis, memberikan
                  perlindungan ekstra tanpa mengorbankan kenyamanan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-3 d-flex">
            <div class="box-custom radius-30 w-100 transform-effect">
              <div
                class="box-custom-body font-18 text-black"
                style="padding: 24px"
              >
                <h5 class="mb-4">Nyaman untuk Bergerak</h5>
                <p class="font-18 text-black mb-0">
                  Desain ergonomis yang memungkinkan Anda bergerak bebas, ideal
                  untuk aktivitas luar ruangan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-3 d-flex">
            <div class="box-custom radius-30 w-100 transform-effect">
              <div
                class="box-custom-body font-18 text-black"
                style="padding: 24px"
              >
                <h5 class="mb-4">Tidak Mudah Robek</h5>
                <p class="font-18 text-black mb-0">
                  Kualitas material kami memastikan jas hujan Anda tahan lama
                  dan awet meski digunakan dalam kondisi ekstrem.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-12">
            <img
              src="assets/images/landing-page/green-brown-desc.jpg"
              alt="jas hujan indonesia"
              class="transform-effect"
              style="width: 300px; border-radius: 100%"
            />
          </div>
        </div>
        <div
          class="p-3 radius-30 mb-3 transform-effect"
          style="background-color: rgb(0, 195, 255)"
        >
          <h5 class="mb-0 text-white">
            Jas Hujan Indonesia adalah pilihan sempurna untuk segala cuaca.
            Pesan sekarang dan hadapi hujan dengan percaya diri!
          </h5>
        </div>

        <video width="300" controls autoplay loop>
          <source
            src="assets/images/landing-page/Biru Modern Flash Sale Ponsel Cerita Instagram Video_20240909_215113_0001.mp4"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>

        <div class="d-flex justify-content-center gap-3 mb-3 mt-3">
          <a href="" class="btn btn-shopee radius-30" style="padding: 15px 30px"
            ><i class="bx bx-cart"></i>Beli di Shopee</a
          >
          <!-- <a
            href=""
            class="btn btn-success radius-30"
            style="padding: 15px 30px"
            ><i class="bx bx-cart"></i>Beli di Tokopedia</a
          > -->
        </div>
        <a
          href=""
          class="btn btn-black radius-30 mb-3"
          style="padding: 15px 30px"
          ><img
            src="assets/images/icons/ic_tiktok.svg"
            alt="tiktok jas hujan indonesia"
            class="me-2"
            width="20"
          />
          Tiktok</a
        >
      </div>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
  </body>
</html>
