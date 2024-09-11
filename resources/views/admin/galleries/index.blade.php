<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="../assets/images/logo-hologram.svg" type="image/png" />
    <!--plugins-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <link
      href="../assets/plugins/metismenu/css/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="../assets/css/app.css" rel="stylesheet" />
    <link href="../assets/css/icons.css" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/css/dark-theme.css" />
    <link rel="stylesheet" href="../assets/css/semi-dark.css" />
    <link rel="stylesheet" href="../assets/css/header-colors.css" />
    <title>Jas Hujan Indonesia</title>
  </head>

  <body>
    <!--wrapper-->
    <div class="wrapper">
      <div class="container py-3 text-center">
        <div class="row align-items-center">
          <div class="col-12 col-lg-11 mb-2">
            <div
              class="p-3 radius-30 mb-3 transform-effect"
              style="background-color: rgb(0, 195, 255)"
            >
            @foreach ($titleWebsites as $title)
                <h5 class="mb-0 text-white">
                    {{ $title->name }}
                </h5>
            @endforeach
            </div>
          </div>
          <div class="col-12 col-lg-1 mb-2">
            <div class="order-actions">
              <a
                type="button"
                class="text-primary bg-light-primary border-0"
                data-bs-toggle="modal"
                data-bs-target="#modalAddTitle"
                ><i class="bx bxs-edit"></i
              ></a>
            </div>
          </div>
        </div>

        <hr />

        <div class="row mb-lg-3">
            @foreach ($sectionTwos as $sectionTwo)
                
            <div class="col-12 col-lg-10 mb-3">
              <img
                src="{{ Storage::url($sectionTwo->image) }}"
                alt="jas hujan indonesia"
                class="img-fluid radius-10 transform-effect"
              />
            </div>
            @endforeach
            <div class="col-12 col-lg-1 mb-2">
                <div class="order-actions">
                  <a
                    type="button"
                    class="text-primary bg-light-primary border-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEditSectionTwo"
                    ><i class="bx bxs-edit"></i
                  ></a>
                </div>
              </div>
        </div>

        <hr />

        <div class="row mb-lg-3">
            @foreach ($sectionThrees as $sectionThree)
                
            <div class="col-12 col-lg-5 mb-3">
              <img
                src="{{ Storage::url($sectionThree->image) }}"
                alt="jas hujan indonesia"
                class="img-fluid radius-10 transform-effect"
              />
            </div>
            @endforeach
            <div class="col-12 col-lg-1 mb-2">
                <div class="order-actions">
                  <a
                    type="button"
                    class="text-primary bg-light-primary border-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalAddSectionThree"
                    ><i class="bx bxs-edit"></i
                  ></a>
                </div>
            </div>
          </div>

          <hr>

          <div class="row mb-lg-3">
            @foreach ($sectionFours as $sectionFour)
                
            <div class="col-12 col-lg-5 mb-3">
              <img
                src="{{ Storage::url($sectionFour->image) }}"
                alt="jas hujan indonesia"
                class="img-fluid radius-10 transform-effect"
              />
            </div>
            @endforeach
            <div class="col-12 col-lg-1 mb-2">
                <div class="order-actions">
                  <a
                    type="button"
                    class="text-primary bg-light-primary border-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modalAddSectionFour"
                    ><i class="bx bxs-edit"></i
                  ></a>
                </div>
            </div>
          </div>

          <hr>

        <div class="row align-items-center mb-5">
          <div class="col-12 col-lg-11 mb-2">
            <div class="box-custom radius-30 transform-effect">
                @foreach ($taglines as $tagline)
                <div class="box-custom-body text-black font-18">
                  {{ $tagline->description }}
                </div>
                @endforeach
            </div>
          </div>
          <div class="col-12 col-lg-1 mb-2">
            <div class="order-actions">
              <a
                type="button"
                class="text-primary bg-light-primary border-0"
                data-bs-toggle="modal"
                data-bs-target="#modalAddTagline"
                ><i class="bx bxs-edit"></i
              ></a>
            </div>
          </div>
        </div>

        <hr />

        <div class="row">
            <div class="order-actions">
                <a
                  type="button"
                  class="text-primary bg-light-primary border-0"
                  data-bs-toggle="modal"
                  data-bs-target="#modalAddGalleries"
                  ><i class="bx bxs-edit"></i
                ></a>
              </div>
            @foreach ($galleries as $gallery)
                
            <div class="col-12 col-lg-3 mb-3">
              <img
                src="{{ Storage::url($gallery->image) }}"
                alt="jas hujan indonesia"
                class="img-fluid radius-10 transform-effect"
              />
            </div>
            @endforeach
        </div>

        <hr>

        <div
          class="p-3 radius-30 mb-3 transform-effect"
          style="background-color: rgb(0, 195, 255)"
        >
          <h5 class="mb-0 text-white">Keunggulan Produk Kami:</h5>
        </div>

        <div class="row">
            <div class="order-actions">
                <a
                  type="button"
                  class="text-primary bg-light-primary border-0"
                  data-bs-toggle="modal"
                  data-bs-target="#modalAddAdvantage"
                  ><i class="bx bxs-edit"></i
                ></a>
            </div>
            @foreach ($advantages as $advantage)
            <div class="col-12 col-lg-3 mb-3 d-flex">
              <div class="box-custom radius-30 w-100 transform-effect">
                <div
                  class="box-custom-body font-18 text-black"
                  style="padding: 24px"
                >
                  <h5 class="mb-4">{{ $advantage->title }}</h5>
                  <p class="font-18 text-black mb-0">
                    {{ $advantage->description }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
        </div>

        <hr />

        

        <div class="row">
            @foreach ($sectionFives as $sectionFive)
                <div class="col-12 col-lg-11">
                    <img
                        src="{{ Storage::url($sectionFive->image) }}"
                        alt="jas hujan indonesia"
                        class="transform-effect"
                        style="width: 300px; border-radius: 100%"
                    />
                </div>
            @endforeach
            
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
            src="../assets/images/landing-page/Biru Modern Flash Sale Ponsel Cerita Instagram Video_20240909_215113_0001.mp4"
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
            src="../assets/images/icons/ic_tiktok.svg"
            alt="tiktok jas hujan indonesia"
            class="me-2"
            width="20"
          />
          Tiktok</a
        >
      </div>

      <!-- Modal Box Edit -->
      <div
        class="modal fade"
        id="modalEditSectionTwo"
        tabindex="-1"
        aria-labelledby="modalEditLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalEditLabel">Title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.sectionTwos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radius-6"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary radius-6">Save</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

      {{-- ----------------- --}}
      <div
      class="modal fade"
      id="modalAddSectionThree"
      tabindex="-1"
      aria-labelledby="modalEditLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditLabel">Title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('admin.sectionThrees.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="title" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                      </div>
                      <div class="mb-3">
                          <label for="formFile" class="form-label">Image</label>
                          <input class="form-control" type="file" id="formFile" name="image">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary radius-6"
                          data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary radius-6">Save</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    {{-- ---------------------- --}}

          {{-- ----------------- --}}
          <div
          class="modal fade"
          id="modalAddSectionFour"
          tabindex="-1"
          aria-labelledby="modalEditLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Title</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{ route('admin.sectionFours.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="mb-3">
                              <label for="title" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                          </div>
                          <div class="mb-3">
                              <label for="formFile" class="form-label">Image</label>
                              <input class="form-control" type="file" id="formFile" name="image">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary radius-6"
                              data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary radius-6">Save</button>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        {{-- ---------------------- --}}

        {{-- ------------------------------ --}}

         <div
         class="modal fade"
         id="modalAddTagline"
         tabindex="-1"
         aria-labelledby="modalEditLabel"
         aria-hidden="true"
       >
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="modalEditLabel">Tagline</h5>
               <button
                 type="button"
                 class="btn-close"
                 data-bs-dismiss="modal"
                 aria-label="Close"
               ></button>
             </div>
             <form method="POST" action="{{ route('admin.taglines.store') }}" enctype="multipart/form-data">
             <div class="modal-body">
                     @csrf
                     <div class="modal-body">
                         <div class="mb-3">
                             <label for="title" class="form-label">Description</label>
                             <input type="text" class="form-control" id="title" placeholder="Title..." name="description">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary radius-6"
                         data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary radius-6">Save</button>
                 </div>
             </form>
           </div>
         </div>
       </div>
       {{-- ------------------------- --}}

        <div
            class="modal fade"
            id="modalAddTitle"
            tabindex="-1"
            aria-labelledby="modalEditLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalEditLabel">Title</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <form method="POST" action="{{ route('admin.titleWebsites.store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radius-6"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary radius-6">Save</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          {{-- ------------------------------ --}}
        {{-- ----------------- --}}
        <div
        class="modal fade"
        id="modalAddGalleries"
        tabindex="-1"
        aria-labelledby="modalEditLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Gallery</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.galleries.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radius-6"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary radius-6">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        {{-- ---------------------- --}}

               {{-- ------------------------- --}}

            <div
               class="modal fade"
               id="modalAddAdvantage"
               tabindex="-1"
               aria-labelledby="modalEditLabel"
               aria-hidden="true"
             >
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="modalEditLabel">Advantage</h5>
                     <button
                       type="button"
                       class="btn-close"
                       data-bs-dismiss="modal"
                       aria-label="Close"
                     ></button>
                   </div>
                   <form method="POST" action="{{ route('admin.advantages.store') }}" enctype="multipart/form-data">
                   <div class="modal-body">
                           @csrf
                           <div class="modal-body">
                               <div class="mb-3">
                                   <label for="title" class="form-label">Nama</label>
                                   <input type="text" class="form-control" id="title" placeholder="Title..." name="title">
                               </div>
                               <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" placeholder="Description..." name="description"></textarea>
                            </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary radius-6"
                               data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary radius-6">Save</button>
                       </div>
                   </form>
                 </div>
               </div>
             </div>
             {{-- ------------------------------ --}}

              {{-- ----------------- --}}
        <div
        class="modal fade"
        id="modalAddSectionFive"
        tabindex="-1"
        aria-labelledby="modalEditLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Gallery</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.sectionFives.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="title" placeholder="Title..." name="name">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary radius-6"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary radius-6">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        {{-- ---------------------- --}}

    
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/index.js"></script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>
  </body>
</html>
