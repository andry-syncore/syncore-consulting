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
            <h2 class="text-orange mb-1">Pendampingan Keuangan</h2>
            <h3 class="text-light">{{ $program->name }}</h3>
         </div>
      </div>
   </section>

   <section id="content-detail-portfolio">
      <div class="container py-3">
         <div class="row">
            <div class="col-md-3 mb-md-0 mb-4">
               <div class="card card-body rounded-3 px-4 py-3 shadow" id="menu-detail-portfolio">
                  <a class="nav-link" href="#tujuan">Tujuan</a>
                  <a class="nav-link" href="#manfaat">Manfaat</a>
                  <a class="nav-link" href="#output">Output</a>
                  <a class="nav-link" href="#fitur">Fitur</a>
                  <a class="nav-link" href="#program-kerja">Program Kerja</a>
                  <a class="nav-link" href="#biaya-pendampingan">Biaya Pendampingan</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tujuan">Tujuan</p>
                  {!! $program->objective !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="manfaat">Manfaat</p>
                  {!! $program->benefit !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="output">Output</p>
                  {!! $program->output !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="fitur">Fitur</p>
                  <table class="table-sm table-bordered mt-2 table">
                     @foreach ($program->feature->name as $item)
                        <tr>
                           <td>
                              <p class="small text-dark-5 mt-3">{{ $item }}</p>
                           </td>
                           <td>{!! $program->feature->content[$loop->index] !!}</td>
                        </tr>
                     @endforeach
                  </table>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="program-kerja">Program Kerja</p>
                  {!! $program->work_program !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="biaya-pendampingan">Biaya Pendampingan</p>
                  <p class="small text-dark-5 mt-2">Biaya Aktivasi dan Hosting (Selama 1 Tahun) : <span class="fw-bolder">{{ $program->cost->cost_first_year }}</span></p>

                  <p class="small text-dark-5">Biaya Hosting Untuk Tahun Ke-2 dst. : <span class="fw-bolder">{{ $program->cost->cost_next_year }}</span></p>

                  <div class="card card-body">
                     <p class="small text-dark-5 fw-bolder">Fasilitas :</p>
                     {!! $program->cost->facilities !!}
                  </div>

                  <div class="card card-body mt-3">
                     <p class="small text-dark-5 fw-bolder">Demo :</p>
                     {!! $program->cost->demo !!}
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
