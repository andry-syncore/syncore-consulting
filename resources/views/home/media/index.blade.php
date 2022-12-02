@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <!-- hero -->
   <header class="pb-lg-5">
      <div class="background-hero-media">
         <div class="container">
            <div class="row align-items-center py-5">
               <div class="col-md-5 col-lg-6">
                  <div class="text-md-start text-center">
                     <h1 class="fw-600 text-orange">Media</h1>
                     <p>Find & digest the horizons-expanding reads from all around the digital sphere.</p>
                  </div>
               </div>
               <div class="col-md-7 col-lg-6">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/media/image-hero.png') }}" alt="gambar hero" loading="lazy">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section content portfolio -->
   <section class="pb-5" id="portfolio">
      <div class="container">
         <form class="row" action="">
            <div class="col-7 col-md-6 col-lg-9">
               <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="fa-solid fa-magnifying-glass text-orange"></i></span>
                  <input class="border-start-0 form-control" id="search" name="search" type="text" placeholder="Cari portofolios">
               </div>
            </div>
            <div class="col-5 col-md-3 col-lg-2">
               <select class="form-select" id="sort" name="sort">
                  <option>Sort by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
            </div>
            <div class="col-12 col-md-3 col-lg-1 mt-md-0 mt-3">
               <div class="d-grid">
                  <button class="btn btn-orange" type="submit">Search</button>
               </div>
            </div>
         </form>

         <div class="d-none mt-5 text-center">

            <h5 class="fw-600 mb-0">Media</h5>
            <p class="text-dark-8 small mt-1">14 Pencarian ditemukan</p>

            <div class="d-flex align-items-center justify-content-center">
               <img class="img-fluid" src="{{ asset('storage/img/icon-search-not-found.svg') }}" alt="" loading="lazy">
               <div class="mx-3 mt-4">
                  <h5 class="fw-600 mb-0">Oops, Media tidak ditemukan</h5>
                  <p class="small text-dark-8 mt-1">Yuk, Coba kata kunci lain untuk mendapatkan apa yang anda cari</p>
               </div>
            </div>

         </div>

         <div class="row mt-5">
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio bg-orange-active px-lg-5 mb-md-0 mb-2 py-2 px-3">Semua</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Policy</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Inovasi</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Governance</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Akuntability</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Sustainability</button>
               <hr class="d-block d-md-none my-0">
            </div>
         </div>
         <hr class="d-none d-md-block mt-3 mb-5">

         <div class="row mt-5">
            <h3 class="text-orange fw-700 mb-3">Artikel</h3>
            @for ($i = 0; $i < 6; $i++)
               <div class="col-md-4 mb-4">
                  <div class="card card-body rounded-3 h-100 shadow-sm">
                     <div class="rounded-3 position-relative mb-2 overflow-hidden">
                        <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                        <img class="img-fluid w-100" src="{{ asset('storage/img/media/image-article.png') }}" alt="gambar artikel" loading="lazy">
                     </div>
                     <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Lingkungan</div>
                     <h5 class="card-title fw-600">BUMDes Riau Raih Omzet Rp 149 Miliar, Terbesar di Indonesia</h5>

                     <div class="card-footer bg-transparent px-0">
                        <div class="d-flex align-items-center">
                           <div class="rounded-circle overflow-hidden">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/image-user-article.png') }}" alt="gambar user" loading="lazy">
                           </div>
                           <div class="ms-2">
                              <p class="fw-500 small m-0">Lana Steiner</p>
                              <p class="text-secondary small m-0">18 Jan 2022</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endfor
         </div>

         <div class="row mt-5">
            <h3 class="text-orange fw-700 mb-3">Audio</h3>
            @for ($i = 0; $i < 6; $i++)
               <div class="col-md-4 mb-4">
                  <div class="card card-body rounded-3 h-100 shadow-sm">
                     <div class="rounded-3 position-relative mb-2 overflow-hidden">
                        <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                        <img class="img-fluid w-100" src="{{ asset('storage/img/media/placeholder-audio-image.png') }}" alt="gambar audio" loading="lazy">
                     </div>
                     <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/img/media/icon-play-audio.png') }}" alt="gambar audio" class="img-fluid me-2">
                        <p class="fw-500 small text-dark-3 m-0">Cakap Startup Ep. 7: Aly Sangadji | Percakapan tentang Merantau, Menemukan Visi, Menggali Potensi</p>
                     </div>
                     <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Lingkungan</div>
                     <h5 class="card-title fw-600">Cakap Startup Ep. 7: Aly Sangadji</h5>

                     <div class="card-footer bg-transparent px-0 py-3">
                        <div class="d-flex align-items-center">
                           <div class="rounded overflow-hidden">
                              <img class="img-fluid" src="{{ asset('storage/img/spotify.svg') }}" alt="icon spotify" loading="lazy">
                           </div>
                           <div class="ms-2">
                              <p class="fw-500 text-dark-8 small m-0">Listen on</p>
                              <p class="text-dark-3 fw-600 small m-0">Spotify</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endfor
         </div>

         <div class="row mt-5">
            <h3 class="text-orange fw-700 mb-3">Video</h3>
            @for ($i = 0; $i < 6; $i++)
               <div class="col-md-4 mb-4">
                  <div class="card card-body rounded-3 h-100 shadow-sm">
                     <div class="rounded-3 position-relative mb-2 overflow-hidden">
                        <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                        <img class="img-fluid w-100" src="{{ asset('storage/img/media/placeholder-video-image.png') }}" alt="gambar video" loading="lazy">
                     </div>
                     <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/img/media/icon-play-audio.png') }}" alt="gambar video" class="img-fluid me-2">
                        <p class="fw-500 small text-dark-3 m-0">Cakap Startup Ep. 7: Aly Sangadji | Percakapan tentang Merantau, Menemukan Visi, Menggali Potensi</p>
                     </div>
                     <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Lingkungan</div>
                     <h5 class="card-title fw-600">Cakap Startup Ep. 7: Aly Sangadji</h5>

                     <div class="card-footer bg-transparent px-0 py-3">
                        <div class="d-flex align-items-center">
                           <div class="rounded overflow-hidden">
                              <img class="img-fluid" src="{{ asset('storage/img/youtube.svg') }}" alt="icon youtube" loading="lazy">
                           </div>
                           <div class="ms-2">
                              <p class="fw-500 text-dark-8 small m-0">Watch it on</p>
                              <p class="text-dark-3 fw-600 small m-0">Youtube</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endfor
         </div>
      </div>
   </section>
   <!-- end content portfolio -->

   @push('script')
      <script>
         // custom script here
      </script>
   @endpush
@endsection
