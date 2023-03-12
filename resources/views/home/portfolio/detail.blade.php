@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <section class="overflow-hidden" id="detail-portfolio">
      <div class="row">
         <div class="col-12">
            <div class="position-relative overflow-hidden">
               <img class="img-fluid" src="{{ asset("storage/$portfolio->photos") }}" alt="{{ $portfolio->slug }}">
               <div class="container">
                  <div class="position-absolute text-header-portfolio">
                     <div class="row">
                        <div class="col-md-7 col-lg-6">
                           <h3 class="text-orange mb-3 text-uppercase">{{ $portfolio->category->name }}</h3>
                           <h4 class="text-white">{{ $portfolio->title }}</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="content-detail-portfolio">
      <div class="container py-3">
         <div class="row">
            <div class="col-md-4 mb-md-0 mb-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">KLIEN</h4>
               <p class="text-dark-3 mb-0">{{ $portfolio->client }}</p>
            </div>
            <div class="col-md-4 mb-md-0 border-start mb-2 border-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">LOKASI</h4>
               <p class="text-dark-3 mb-0">{{ $portfolio->location }}</p>
            </div>
            <div class="col-md-4 mb-md-0 border-start mb-2 border-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">TAHUN</h4>
               <p class="text-dark-3 mb-0">{{ $portfolio->year }}</p>
            </div>
         </div>

         <hr class="text-orange border-3">

         <div class="row">
            <div class="col-md-3 mb-md-0 mb-4">
               <div class="card card-body rounded-3 px-4 py-3 shadow" id="menu-detail-portfolio">
                  <a class="nav-link" href="#latar-belakang">Latar Belakang Proyek</a>
                  <a class="nav-link" href="#permasalahan-klien">Permasalahan Klien</a>
                  <a class="nav-link" href="#solusi">Solusi</a>
                  <a class="nav-link" href="#tahapan-dan-metodologi">Tahapan atau Metodologi</a>
                  <a class="nav-link" href="#hasil">Hasil</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body">
                  <p class="fw-600 m-0" id="latar-belakang">Latar Belakang Proyek</p>
                  <p class="text-dark-5 small mt-3 mb-0">{{ $portfolio->background }}</p>

                  <div class="rounded-2 mt-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset("storage/$portfolio->photos") }}" alt="{{ $portfolio->slug }}">
                  </div>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="permasalahan-klien">Permasalahan Klien</p>
                  {!! $portfolio->problem !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="solusi">Solusi</p>
                  {!! $portfolio->solution !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tahapan-dan-metodologi">Tahapan dan Metodologi</p>

                  {!! $portfolio->metodologi !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="hasil">Hasil</p>
                  {!! $portfolio->result !!}
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- <section id="other-portfolio">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-6">
               <h5 class="fw-600">Baca juga Proyek kami lainnya</h5>
            </div>
            <div class="col-6 text-end">
               <a class="text-decoration-none" href="">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>

         <div class="row mt-5">
            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-1.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Policy</div>
                  <h4 class="card-title fw-600">Kepmenko PMK Nomor 32 Tahun 2022 Tentang Pedoman Umum Pelaksanaan Program Percepatan Penghapusan Kemiskinan Ekstrem</h4>
                  <p class="text-dark-5 fw-500 mt-2">Syncore Consulting bekerjasama dengan lembaga TNP2K dan Bumdes.id dalam melakukan riset mewawancari 50 direktur BUM Desa dan 50
                     kepala desa yang tersebar di seluruh Indonesia.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-2.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Inovasi</div>
                  <h4 class="card-title fw-600">Program Desa Brilian 2020 Dan Desa Brilian 2021 Bekerjasama Dengan Pt. Bank Rakyat Indonesia Tbk.</h4>
                  <p class="text-dark-5 fw-500 mt-2">Syncore Consulting bekerjasama dengan bumdes.id dan PT. Bank Rakyat Indonesia Tbk membuat program Desa Brilian di tahun 2020 dan
                     2021.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-3.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Governance</div>
                  <h4 class="card-title fw-600">Program Revitalisasi Kelembagaan Bum Desa Umbara Desa Sanggrahan Dan Bum Desa Kemudo Makmur Desa Kemudo Bekerjasama Dengan Csr PT.
                     Sarihusada Generasi Mahardika</h4>
                  <p class="text-dark-5 fw-500 mt-2">Pada tahun 2020 - 2021 syncore consulting bekerjasama dengan PT. Sarihusada Generasi Mahardika (SGM) dan Bumdes.id. PT. SGM
                     memiliki pabrik yang berada di wilayah Desa Kemudo.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}

   <section id="contact-detail-portfolio">
      <div class="container py-5">
         <h5 class="fw-600 text-center">Kembangkan bisnis anda bersama kami</h5>
         <div class="row mt-5">
            <div class="col-md-6 mb-md-0 mb-4">
               <div class="card card-body h-100 border-0 shadow-sm rounded-4 py-5 bg-purple text-light">
                  <div class="text-center">
                     <i class="fa-brands fa-whatsapp fa-5x mb-3"></i>
                     <p class="fw-600 m-0">Kontak Via Whatsapp</p>
                     <p class="fw-400 small">Punya pertanyaan? Langsung chat saja!</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <a class="btn btn-orange fw-500 py-2 px-5" href="">Hubungkan</a>
                  </div>
               </div>
            </div>

            <div class="col-md-6 mb-md-0 mb-4">
               <div class="card card-body h-100 border-0 shadow-sm rounded-4 py-5 bg-orange text-light">
                  <div class="text-center">
                     <i class="fa-solid fa-user-group fa-5x mb-3"></i>
                     <p class="fw-600 m-0">1 on 1 Diskusi Bersama Tim Kami</p>
                     <p class="fw-400 small">Diskusi mendalam bersama dengan tim</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <a class="btn btn-purple fw-500 py-2 px-5" href="">Bergabung Langsung</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   @push('script')
      <script>
         // custom script here
      </script>
   @endpush
@endsection
