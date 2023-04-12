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
            <h3 class="text-light">{{ $data->name }}</h3>
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
                  <a class="nav-link" href="#biaya">Biaya</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tujuan">Tujuan</p>
                  {!! $data->objective !!}
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="agenda">Agenda</p>
                  <table class="table-sm table-bordered mt-2 table">
                     <tr>
                        <td class="text-center" colspan="2"><p class="m-0 small">Agenda</p></td>
                     </tr>
                     @foreach ($data->agenda->name as $item)
                        <tr>
                           <td>
                              <p class="small text-dark-5 m-0">{{ $item }}</p>
                           </td>
                           <td>
                              <p class="small text-dark-5 m-0">{{ $data->agenda->detail[$loop->index] }}</p>
                           </td>
                        </tr>
                     @endforeach
                  </table>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="biaya">Biaya</p>
                  <p class="small text-dark-5 m-0 mt-2">{{ $data->cost }}</p>
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
