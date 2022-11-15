@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
         #map {
            height: 400px;
         }
      </style>
   @endpush

   <!-- hero -->
   <header class="pb-lg-5">
      <div class="background-hero-about">
         <div class="container">
            <div class="row justify-content-center py-5">
               <div class="col-md-10 col-lg-8">
                  <div class="text-center">
                     <h1 class="fw-600 text-orange">We're Here to Help!</h1>
                     <p>Always humans, never bots. The hands-down, sharpest and friendliest support team in the biz. Contact us and we'll get back to you ASAP</p>

                     <div class="row mt-5">
                        <div class="col-md-6 mt-md-5 mt-3">
                           <div class="card card-body rounded-4 h-100 border-0 py-5 shadow-sm">
                              <div class="text-center">
                                 <img loading="lazy" src="{{ asset('assets/img/whatsapp.svg') }}" alt="icon whatsapp" class="img-fluid mb-4">
                                 <p class="fw-800 text-dark-3 mb-0">Chat with Our Team</p>
                                 <p class="mt-0">Have any questions? Ask away!</p>
                                 <a href="" target="_blank" class="btn btn-orange mt-4">Chat on WhatsApp</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mt-3">
                           <div class="card card-body rounded-4 h-100 border-0 py-5 shadow-sm">
                              <div class="text-center">
                                 <img loading="lazy" src="{{ asset('assets/img/users.svg') }}" alt="icon users" class="img-fluid mb-4">
                                 <p class="fw-800 text-dark-3 mb-0">1-on-1 Meeting with Our Team</p>
                                 <p class="mt-0">Talk & discuss with our team</p>
                                 <a href="" target="_blank" class="btn btn-orange mt-4">Request 1-on-1 Meeting</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section contact -->
   <section id="contact" class="py-5">
      <div class="background-contact-about">
         <div class="container">
            <div class="row justify-content-center py-5">
               <div class="col-md-10 col-lg-8">
                  <div class="text-center">
                     <h1 class="fw-600 text-orange">Pintu kami selalu terbuka!</h1>
                     <p class="text-dark-5">Saat ini kami memusatkan operasi kami di Yogyakarta</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 mb-lg-0 mb-4">
                  <p class="text-dark-3 fw-600 mb-1">Office</p>
                  <p class="text-dark-5"><i class="fa-solid fa-location-dot"></i> Jl. Nogotirto No. 15B, Gamping, Sleman, Daerah Istimewa Yogyakarta 55282</p>
                  <div id="map" class="rounded-4 mt-5 mb-4"></div>
               </div>
               <div class="col-lg-6">
                  <div class="card ms-lg-5 px-lg-5 border-0 bg-transparent">
                     <p class="text-dark-3 fw-600 mb-1">Komplain & Bantuan Pengguna</p>
                     <p class="text-dark-5 small mb-4"><img loading="lazy" src="{{ asset('assets/img/customer-service-icon.svg') }}" alt="customer service icon" class="img-fluid">
                        Syncorehelpcenter@gmail.com</p>

                     <p class="text-dark-3 fw-600 mb-1">Sekretaris Perusahaan</p>
                     <p class="text-dark-5 small mb-2"><i class="fa-solid fa-envelope fa-lg me-1"></i> Marketing@syncoreconsulting.com</p>
                     <p class="text-dark-5 small mb-4"><i class="fa-solid fa-phone fa-lg me-1"></i> Marketing@syncoreconsulting.com</p>

                     <p class="text-dark-3 fw-600 mb-1">Sekretaris Perusahaan</p>
                     <p class="text-dark-5 small mb-2"><i class="fa-solid fa-envelope fa-lg me-1"></i> Training@syncore.co.id</p>
                     <p class="text-dark-5 small mb-4"><i class="fa-solid fa-phone fa-lg me-1"></i> Training@syncore.co.id</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end contant -->

   <!-- section banner -->
   <section id="banner" class="py-lg-5 py-3">
      <div class="background-banner-about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <h2 class="fw-600 text-orange">Kirim Pesan & Pertanyaan</h2>
                  <p class="text-dark-5">Jangan ragu untuk mengirimkan pertanyaan atau pesan kamu kepada kami.</p>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a href="#" class="btn btn-orange border py-2 px-3">Hubungi Kami</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img loading="lazy" src="{{ asset('assets/img/about/image-banner.png') }}" alt="gambar banner" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->

   @push('script')
      <script>
         // custom script here

         // show map
         const map = L.map('map').setView([-7.775967351180634, 110.33648968438999], 17);
         L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
         L.marker([-7.775967351180634, 110.33648968438999]).addTo(map)
      </script>
   @endpush
@endsection
