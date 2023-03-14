<div class="row justify-content-between align-items-center my-4">
   @if ($portfolio)
      <div class="col-lg-6 mb-lg-0 mb-3">
         <h2 class="fw-600 mb-lg-4">{{ $portfolio->title }}</h2>
         <p class="text-dark-5 fw-400 mb-lg-4 mb-2">{{ Str::limit($portfolio->background, 200, '...') }}</p>
         <a class="text-orange text-decoration-none fw-600" href="{{ route('portfolio.detail', $portfolio) }}">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="col-lg-6">
         <div class="rounded-4 overflow-hidden">
            <img class="img-fluid" src="{{ asset("storage/$portfolio->photos") }}" alt="" loading="lazy">
         </div>
      </div>

      <div class="mt-5 text-center">
         <a class="btn btn-outline-dark" href="{{ route('portfolio') }}">Lihat semua Portfolios</a>
      </div>
   @else
      <div class="d-flex align-items-center justify-content-center">
         <img class="img-fluid" src="{{ asset('storage/img/icon-search-not-found.svg') }}" alt="" loading="lazy">
         <div class="mx-3 mt-4">
            <h5 class="fw-600 mb-0">Oops, Portofolios tidak ditemukan</h5>
         </div>
      </div>
   @endif
</div>
