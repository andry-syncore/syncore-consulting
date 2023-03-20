@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <section id="detail-program-pendampingan">
      <div class="container">
         <div class="title-program">
            <h2 class="text-orange mb-1">Program Pendampingan</h2>
            <h3 class="text-light">{{ $program->name }}</h3>
         </div>
      </div>
   </section>

   <section id="content-detail-portfolio">
      <div class="container py-3">
         <div class="row">
            <div class="col-md-3 mb-md-0 mb-4">
               <div class="card card-body rounded-3 px-4 py-3 shadow" id="menu-detail-portfolio">
                  <a class="nav-link" href="#latar-belakang">Latar Belakang</a>
                  <a class="nav-link" href="#tujuan">Tujuan</a>
                  <a class="nav-link" href="#ruang-lingkup">Ruang Lingkup</a>
                  <a class="nav-link" href="#metodologi">Metodologi</a>
                  <a class="nav-link" href="#dokumen">Dokumen Hasil Pendampingan</a>
                  <a class="nav-link" href="#waktu-pelaksanaan">Waktu Pelaksanaan</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body">
                  <p class="fw-600 m-0" id="latar-belakang">Latar Belakang</p>
                  <p class="text-dark-5 small mt-3 mb-0">{{ $program->background }}</p>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tujuan">Tujuan</p>
                  {!! $program->objective !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="ruang-lingkup">Ruang Lingkup</p>
                  <p class="text-dark-5 small mt-3 mb-0">{{ $program->scope }}</p>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="metodologi">Metodologi</p>
                  <img src="{{ asset("storage/$program->methodology") }}" alt="" class="img-fluid">
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="dokumen">Dokumen Hasil Pendampingan</p>
                  {!! $program->documents !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 mb-2" id="waktu-pelaksanaan">Waktu dan Pelaksanaan</p>
                  <img src="{{ asset("storage/$program->execution_time") }}" alt="" class="img-fluid">
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
