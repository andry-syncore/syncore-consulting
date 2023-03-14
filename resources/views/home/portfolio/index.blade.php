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
                     <p>Kami telah menghasilkan banyak proyek sukses selama 12 tahun Berikut adalah beberapa contoh dari pekerjaan kami baru-baru ini.</p>
                  </div>
               </div>
               <div class="col-md-7 col-lg-6">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/portfolio/image-hero.png') }}" alt="gambar hero" loading="lazy">
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
            <div class="col-7 col-md-9 col-lg-11">
               <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="fa-solid fa-magnifying-glass text-orange"></i></span>
                  <input name="category" type="hidden" value="{{ request()->category ?? '' }}">
                  <input class="border-start-0 form-control" id="search" name="search" type="text" value="{{ request()->search ?? '' }}" placeholder="Kata kunci menggunakan judul portfolio">
               </div>
            </div>
            <div class="col-5 col-md-3 col-lg-1 mt-md-0 mt-3">
               <div class="d-grid">
                  <button class="btn btn-orange" type="submit">Search</button>
               </div>
            </div>
         </form>

         <!-- Nav tabs -->
         <ul class="nav nav-tabs tab-porfolio d-flex justify-content-center mt-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
               <a class="nav-link {{ !request()->category ? 'active' : '' }}" href="{{ route('portfolio') }}">SEMUA</a>
            </li>
            @foreach ($categories as $category)
               <li class="nav-item" role="presentation">
                  <a class="nav-link {{ request()->category == $category->slug ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['category' => $category->slug]) }}">{{ Str::upper($category->name) }}</a>
               </li>
            @endforeach
         </ul>

         <div class="tab-content">
            <div class="tab-pane active" tabindex="0">
               <div class="row mt-5">
                  @forelse ($portfolios as $portfolio)
                     <div class="col-md-6 mb-4">
                        <div class="card card-body rounded-3 h-100 shadow-sm">
                           <div class="rounded-3 overflow-hidden">
                              <img class="img-fluid w-100" src="{{ asset("storage/$portfolio->photos") }}" alt="{{ $portfolio->slug }}" loading="lazy">
                           </div>
                           <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">{{ $portfolio->category->name }}</div>
                           <h4 class="card-title fw-600">{{ $portfolio->title }}</h4>
                           <p class="text-dark-5 fw-500 mt-2">{{ Str::limit($portfolio->background, 400, '...') }}</p>

                           <div class="card-footer mb-3 border-0 bg-transparent px-0">
                              <a class="text-orange text-decoration-none fw-600" href="{{ route('portfolio.detail', $portfolio) }}">Selengkapnya <i
                                    class="fa-solid fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  @empty
                     <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('storage/img/icon-search-not-found.svg') }}" alt="" loading="lazy">
                        <div class="mx-3 mt-4">
                           <h5 class="fw-600 mb-0">Oops, Portofolios tidak ditemukan</h5>
                           <p class="small text-dark-8 mt-1">Yuk, Coba kata kunci lain untuk mendapatkan apa yang anda cari</p>
                        </div>
                     </div>
                  @endforelse
                  <div class="d-flex justify-content-center">
                     {{ $portfolios->links() }}
                  </div>
               </div>
            </div>
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
