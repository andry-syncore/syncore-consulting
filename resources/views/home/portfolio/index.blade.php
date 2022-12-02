@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <!-- hero -->
   <header class="pb-lg-5">
      <div class="background-hero-portfolio">
         <div class="container">
            <div class="row align-items-center py-5">
               <div class="col-md-5 col-lg-6">
                  <div class="text-md-start text-center">
                     <h1 class="fw-600 text-orange">Portofolios</h1>
                     <p>Berikut program - program yang telah kami jalankan</p>
                  </div>
               </div>
               <div class="col-md-7 col-lg-6">
                  <div class="rounded-3 overflow-hidden">
                     <img loading="lazy" src="{{ asset('storage/img/portfolio/image-hero.png') }}" alt="gambar hero" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section content portfolio -->
   <section id="portfolio" class="pb-5">
      <div class="container">
         <form action="" class="row">
            <div class="col-7 col-md-6 col-lg-9">
               <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="fa-solid fa-magnifying-glass text-orange"></i></span>
                  <input type="text" class="border-start-0 form-control" id="search" name="search" placeholder="Cari portofolios">
               </div>
            </div>
            <div class="col-5 col-md-3 col-lg-2">
               <select class="form-select" name="sort" id="sort">
                  <option>Sort by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
            </div>
            <div class="col-12 col-md-3 col-lg-1 mt-md-0 mt-3">
               <div class="d-grid">
                  <button type="submit" class="btn btn-orange">Search</button>
               </div>
            </div>
         </form>

         <div class="mt-5 text-center d-none">
            
            <h5 class="fw-600 mb-0">Kalimantan</h5>
            <p class="text-dark-8 small mt-1">14 Pencarian ditemukan</p>

            <div class="d-flex align-items-center justify-content-center">
               <img loading="lazy" src="{{ asset('storage/img/icon-search-not-found.svg') }}" alt="" class="img-fluid">
               <div class="mx-3 mt-4">
                  <h5 class="fw-600 mb-0">Oops, Portofolios tidak ditemukan</h5>
                  <p class="small text-dark-8 mt-1">Yuk, Coba kata kunci lain untuk mendapatkan apa yang anda cari</p>
               </div>
            </div>

         </div>

         <div class="row mt-5">
            <div class="col-12 col-md-4 col-lg-2 mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2 bg-orange-active px-lg-5 mb-2 mb-md-0 px-3">Semua</button>
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
            @for ($i = 0; $i < 4; $i++)
               <div class="col-md-6 mb-4">
                  <div class="card card-body rounded-3 h-100 shadow-sm">
                     <div class="rounded-3 overflow-hidden">
                        <img loading="lazy" src="{{ asset('storage/img/portfolio/image-portfolio.png') }}" alt="gambar portfolio" class="img-fluid w-100">
                     </div>
                     <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Policy</div>
                     <h4 class="card-title fw-600">Program Pendampingan Pengembangan Website Marketplace Belanja Kalteng</h4>
                     <p class="text-dark-5 fw-500 mt-2">Merupakan program pendampingan yang bekerjasama dengan PT. Sari Husada</p>

                     <div class="card-footer mb-3 border-0 bg-transparent px-0">
                        <a href="" class="text-orange text-decoration-none fw-600">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
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
