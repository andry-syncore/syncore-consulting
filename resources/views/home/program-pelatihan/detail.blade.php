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
            <h2 class="text-orange mb-1">Program Pelatihan</h2>
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
                  <a class="nav-link" href="#agenda">Agenda</a>
                  <a class="nav-link" href="#biaya-pelatihan">Biaya Pelatihan</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tujuan">Tujuan</p>
                  {!! $program->objective !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="agenda">Agenda</p>
                  <p class="small text-dark-5">Susuan acara adalah sebagai berikut :</p>
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>SESI</th>
                           <th>WAKTU</th>
                           <th>MATERI</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($program->agenda->sesi as $i => $sesi)
                           <tr>
                              <td>{{ $sesi }}</td>
                              <td>{{ $program->agenda->waktu[$i] }}</td>
                              <td>{{ $program->agenda->materi[$i] }}</td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>

                  <p class="small text-danger fw-bolder m-0">Catatan : <span class="fw-normal text-dark-5">{{ $program->agenda->note }}</span></p>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="biaya-pelatihan">Biaya Pelatihan</p>
                  <div class="card card-body rounded-3 mt-3">
                     <p class="small text-dark-5 my-1">Biaya Pelatihan : <span class="fw-bolder">{{ $program->cost->biaya }}</span></p>
                     <p class="small text-dark-5 my-1">Waktu Pelatihan : <span class="fw-bolder">{{ $program->cost->waktu }}</span></p>
                     <p class="small text-dark-5 my-1">Lokasi Pelatihan : <span class="fw-bolder">{{ $program->cost->lokasi }}</span></p>

                     <p class="small text-dark-5 mt-2 mb-0 fw-bolder">Fasilitas :</p>
                     {!! $program->cost->fasilitas !!}

                     <p class="small text-danger fw-bolder m-0">Catatan : <span class="fw-normal text-dark-5">{{ $program->cost->note }}</span></p>
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
