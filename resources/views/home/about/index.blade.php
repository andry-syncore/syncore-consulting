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
               <div class="col-md-11 col-lg-9">
                  <h1 class="fw-600 text-orange mb-4 text-center">Tentang Syncore Consulting</h1>
                  <p class="text-dark mt-0 mb-5">Pada awal perjalanan PT Syncore Indonesia, Syncore Consulting ini menjadi layanan pertama dalam mengatasi permasalahan para pengusaha
                     kecil dan
                     menengah (UKM dan UMKM) seputar pengelolaan keuangan. Jasa yang ditawarkan Syncore Consulting ketika itu hanya seputar Tata Cara Pengelolaan Kas dan Bank,
                     Pengelolaan Penjualan,
                     Pengelolaan Pembelian, Penggajian, dan Tata Cara Pelaporan Keuangan. Seiring berjalannya waktu Syncore Consulting mengembangkan layanan bukan hanya untuk
                     pengusaha kecil saja akan tetapi memberikan pelayanan kepada Penta Helix, yaitu Pemerintah, Akademisi, Bisnis/Praktisi, Komunitas/NGO, dan Media.</p>

                  <div class="row mt-5 py-4">
                     <h1 class="fw-600 text-orange mb-4 text-center">Visi & Misi</h1>
                     <div class="col-md-6 mt-md-3">
                        <div class="card card-body rounded-4 border-0 shadow-sm mt-md-5">
                           <h4 class="text-orange fw-500 m-0 mb-2">Visi :</h4>
                           <p class="small text-dark m-0">Menjadi penyedia layanan yang Terus Bergerak dan Senantiasa Memberi Manfaat bagi Organisasi dan Masyarakat dalam membantu
                              dalam kajian kebijakan, menumbuhkan Kewirausahaan, menguatkan Tata Kelola dan Mengembankan Kinerja untuk Memberi Kontribuasi Nyata bagi Indonesia.</p>
                        </div>
                     </div>
                     <div class="col-md-6 mt-md-3">
                        <div class="card card-body rounded-4 border-0 shadow-sm mt-md-5">
                           <h4 class="text-orange fw-500 m-0 mb-2">Misi :</h4>
                           <ul>
                              <li class="text-dark small">Menyelenggarakan Layanan Konsultasi yang berkualitas dengan harga terjangkau.</li>
                              <li class="text-dark small">Mengembangkan Sistem terintegrasi yang sinkron dan adaptif.</li>
                              <li class="text-dark small">Menyediakan Training yang sesuai kebutuhan, aplikatif dan menyenangkan.</li>
                              <li class="text-dark small">Menyediakan Media digital dan konvensional yang mendidik dan interaktif.</li>
                              <li class="text-dark small">Menyediakan dukungan sarana prasarana untuk pengembangan usaha dan peningkatan kapasitas SDM yang nyaman dan ramah.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- team -->
   <section class="pb-lg-5">
      <div class="row justify-content-center py-5">
         <div class="col-12">
            <div class="overflow-hidden rounded-lg">
               <img class="w-100" src="{{ asset('storage/img/about/team-consulting.png') }}" alt="">
            </div>
         </div>
      </div>
   </section>
   <!-- end team -->

   <!-- contact -->
   <section class="pb-lg-5">
      <div class="background-hero-about">
         <div class="container">
            <div class="row justify-content-center py-5">
               <div class="col-md-10 col-lg-8">
                  <div class="text-center">
                     <h1 class="fw-600 text-orange">Kami Siap untuk Membantu Anda!</h1>
                     <p>Jika Anda memiliki kesulitan dan masalah berkaitan dengan bisnis bisa langsung kontak kami saja melalui dua saluran berikut!</p>

                     <div class="row mt-5">
                        <div class="col-md-6 mt-md-5 mt-3">
                           <div class="card card-body rounded-4 h-100 border-0 py-5 shadow-sm">
                              <div class="text-center">
                                 <img class="img-fluid mb-4" src="{{ asset('storage/img/whatsapp.svg') }}" alt="icon whatsapp" loading="lazy">
                                 <p class="fw-800 text-dark-3 mb-0">Kontak Via Whatsapp</p>
                                 <p class="mt-0">Punya pertanyaan? Langsung chat saja!</p>
                                 <a class="btn btn-orange mt-4" href="" target="_blank">Hubungi Kami</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 mt-md-5 mt-3">
                           <div class="card card-body rounded-4 h-100 border-0 py-5 shadow-sm">
                              <div class="text-center">
                                 <img class="img-fluid mb-4" src="{{ asset('storage/img/users.svg') }}" alt="icon users" loading="lazy">
                                 <p class="fw-800 text-dark-3 mb-0">1 on 1 Diskusi Bersama Tim Kami</p>
                                 <p class="mt-0">Diskusi mendalam bersama dengan tim</p>
                                 <a class="btn btn-orange mt-4" href="" target="_blank">Bergabung Langsung</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end contact -->

   <!-- section contact -->
   <section class="py-5" id="contact">
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
                  <div class="rounded-4 mt-5 mb-4" id="map"></div>
               </div>
               <div class="col-lg-6">
                  <div class="card ms-lg-5 px-lg-5 border-0 bg-transparent">
                     <p class="text-dark-3 fw-600 mb-1">Komplain & Bantuan Pengguna</p>
                     <p class="text-dark-5 small mb-4"><img class="img-fluid" src="{{ asset('storage/img/customer-service-icon.svg') }}" alt="customer service icon" loading="lazy">
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
   <section class="py-lg-5 py-3" id="banner">
      <div class="background-banner-about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <h2 class="fw-600 text-orange">Kirim Pesan & Pertanyaan</h2>
                  <p class="text-dark-5">Jangan ragu untuk mengirimkan pertanyaan atau pesan kamu kepada kami.</p>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a class="btn btn-orange border py-2 px-3" href="#">Hubungi Kami</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img class="img-fluid" src="{{ asset('storage/img/about/image-banner.png') }}" alt="gambar banner" loading="lazy">
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
