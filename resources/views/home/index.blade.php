@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <!-- hero -->
   <header class="pb-lg-5">
      <div class="background-hero-home">
         <div class="container">
            <div class="row align-items-lg-center justify-content-lg-between py-5">
               <div class="col-lg-6">
                  <div class="text-lg-start text-center">
                     <h1 class="fw-600 text-orange">Kami Siap Menyediakan Metode Terbaik untuk Mengembangkan Bisnis Anda</h1>
                     <p class="text-dark-3">Syncore Consulting siap membantu bisnis melalui lima layanan utama yakni PIGAS (Policy, Inovasi, Governance, Akuntabilitas, dan Sustainability)</p>
                  </div>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a class="btn btn-orange border py-2 px-3" href="#">Hubungi Kami</a>
                     <a class="btn btn-white border py-2 px-3" href="#">Daftar Program</a>
                  </div>
               </div>
               <div class="col-lg-5">
                  <img class="img-fluid w-100" src="{{ asset('storage/img/homepage/image-hero.png') }}" alt="gambar hero" loading="lazy">
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section client -->
   <section class="py-lg-5 py-3" id="client">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-9">
               <div class="px-5 text-center">
                  <h2 class="text-orange fw-600 mb-3">Dipercaya Puluhan Klien untuk Bekerjasama Mengembangkan Bisnis</h2>
                  <h5 class="text-dark-3 fw-400">Mendapatkan kepercayaan dari klien membuat kami memberikan kinerja terbaik untuk mencapai tujuan bisnis kedepan</h5>
               </div>
            </div>
            <div class="col-12 mt-4">
               <div class="swiper slider-client">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide"><img src="{{ asset('storage/img/homepage/logo-slider-1.svg') }}" alt="logo slider" loading="lazy"></div>
                     <div class="swiper-slide"><img src="{{ asset('storage/img/homepage/logo-slider-2.svg') }}" alt="logo slider" loading="lazy"></div>
                     <div class="swiper-slide"><img src="{{ asset('storage/img/homepage/logo-slider-3.svg') }}" alt="logo slider" loading="lazy"></div>
                     <div class="swiper-slide"><img src="{{ asset('storage/img/homepage/logo-slider-4.svg') }}" alt="logo slider" loading="lazy"></div>
                     <div class="swiper-slide"><img src="{{ asset('storage/img/homepage/logo-slider-5.svg') }}" alt="logo slider" loading="lazy"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end client -->

   <!-- section reason -->
   <section class="py-lg-5 py-3" id="reason">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
               <img class="img-fluid w-100" src="{{ asset('storage/img/homepage/image-section-reason.png') }}" alt="gambar section teknologi" loading="lazy">
            </div>
            <div class="col-lg-6">
               <h1 class="text-orange fw-600">Kenapa Harus Syncore Consulting?</h1>
               <p class="text-dark-3">Syncore Consulting mengembangkan layanan untuk Penta Helix yaitu Pemerintah, Akademisi, Bisnis/Praktisi, Komunitas/NGO, dan Media dengan
                  menggunakan Metode ATMR (Asses-Treat-Monitor-Review). Metodologi ini memungkinkan kami untuk melakukan proyek berskala besar, kebutuhan khusus, sistematis dan
                  berkelanjutan.</p>

               <ul class="text-dark-5" id="list-reason">
                  <div class="row align-items-center">
                     <div class="col-2 text-lg-end">
                        <img class="img-fluid" src="{{ asset('storage/img/users-icon.svg') }}" alt="icon" loading="lazy">
                     </div>
                     <div class="col-10">
                        <li class="my-3">Bekerjasama dengan para profesional yang sudah ahli dibidangnya</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img class="img-fluid" src="{{ asset('storage/img/arrow-icon.svg') }}" alt="icon" loading="lazy">
                     </div>
                     <div class="col-10">
                        <li class="my-3">Memiliki pelatihan online & offline untuk mendampingi setiap langkah dari bisnis klien</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img class="img-fluid" src="{{ asset('storage/img/hand-icon.svg') }}" alt="icon" loading="lazy">
                     </div>
                     <div class="col-10">
                        <li class="my-3">Selalu memberikan nilai lebih kepada klien</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img class="img-fluid" src="{{ asset('storage/img/connection-icon.svg') }}" alt="icon" loading="lazy">
                     </div>
                     <div class="col-10">
                        <li class="my-3">Selalu berorientasi pada hasil dengan menjunjung tinggi kejujuran dan kepercayaan</li>
                     </div>
                  </div>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- end reason -->

   <!-- section help -->
   <section class="py-lg-5 py-3" id="help">
      <div class="background-help-home">
         <div class="container">
            <div class="row justify-content-lg-center">
               <div class="col-lg-6">
                  <div class="text-center">
                     <h2 class="text-orange fw-600">Bagaimana Cara Kami Membantu Anda <span class="text-dark-3">Mengembangkan Bisnis?</span></h2>
                     <p class="text-dark-5">Memahami proses bisnis dengan lebih cepat untuk memudahkan pengambilan keputusan yang lebih baik agar bisnis bisa berkembang melalui
                        layanan konsultasi, sistem, pelatihan dan media.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 mt-4">
                  <div class="swiper slider-help">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/card-slider-1.png') }}" alt="card slider" loading="lazy">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/card-slider-2.png') }}" alt="card slider" loading="lazy">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/card-slider-3.png') }}" alt="card slider" loading="lazy">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/card-slider-4.png') }}" alt="card slider" loading="lazy">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img class="img-fluid" src="{{ asset('storage/img/homepage/card-slider-5.png') }}" alt="card slider" loading="lazy">
                           </div>
                        </div>
                     </div>

                     <div class="swiper-pagination"></div>

                     <div class="swiper-button-prev d-none d-md-flex shadow"><i class="fa-solid fa-angle-left text-dark fa-2x"></i></div>
                     <div class="swiper-button-next d-none d-md-flex shadow"><i class="fa-solid fa-angle-right text-dark fa-2x"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end help -->

   <!-- section portfolio -->
   <section class="py-lg-5 py-3" id="portfolio">
      <div class="container">
         <div class="text-center">
            <h2 class="text-orange fw-600">Portofolio</h2>
            <p class="text-dark-5">Mengembangkan bisnis melalui Project yang dikembangkan dan dieksekusi dengan baik</p>
         </div>
         <div class="row justify-content-lg-between mt-5">
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2 bg-orange-active px-lg-5 mb-2 mb-md-0 px-3" data-target="tab-policy">Policy</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2" data-target="tab-inovasi">Inovasi</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2" data-target="tab-governance">Governance</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2" data-target="tab-akuntability">Akuntability</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2" data-target="tab-sustainability">Sustainability</button>
               <hr class="d-block d-md-none my-0">
            </div>
         </div>
         <hr class="d-none d-md-block my-3">

         <div id="tab-policy" class="tab-content-portfolio">
            <div class="row justify-content-between align-items-center my-4">
               <div class="col-lg-6 mb-lg-0 mb-3">
                  <h2 class="fw-600 mb-lg-4">Kepmenko PMK Nomor 32 Tahun 2022 Tentang Pedoman Umum Pelaksanaan Program Percepatan Penghapusan Kemiskinan Ekstrem</h2>
                  <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Syncore Consulting bekerjasama dengan lembaga TNP2K dan Bumdes.id dalam melakukan riset mewawancari 50 direktur BUM Desa dan 50 kepala desa yang tersebar di seluruh Indonesia.</p>
                  <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <div class="rounded-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/homepage/image-portfolio-policy-1.png') }}" alt="" loading="lazy">
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a class="btn btn-outline-dark" href="">Lihat semua Portfolios</a>
            </div>
         </div>

         <div id="tab-inovasi" class="tab-content-portfolio d-none">
            <div class="row justify-content-between align-items-center my-4">
               <div class="col-lg-6 mb-lg-0 mb-3">
                  <h2 class="fw-600 mb-lg-4">Program Desa Brilian 2020 Dan Desa Brilian 2021 Bekerjasama Dengan Pt. Bank Rakyat Indonesia Tbk.</h2>
                  <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Syncore Consulting bekerjasama dengan bumdes.id dan PT. Bank Rakyat Indonesia Tbk membuat program Desa Brilian di tahun 2020 dan 2021.</p>
                  <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <div class="rounded-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/homepage/image-portfolio-inovasi-1.png') }}" alt="" loading="lazy">
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a class="btn btn-outline-dark" href="">Lihat semua Portfolios</a>
            </div>
         </div>
         
         <div id="tab-governance" class="tab-content-portfolio d-none">
            <div class="row justify-content-between align-items-center my-4">
               <div class="col-lg-6 mb-lg-0 mb-3">
                  <h2 class="fw-600 mb-lg-4">Program Revitalisasi Kelembagaan Bum Desa Umbara Desa Sanggrahan Dan Bum Desa Kemudo Makmur Desa Kemudo Bekerjasama Dengan Csr PT. Sarihusada Generasi Mahardika</h2>
                  <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Pada tahun 2020 - 2021 syncore consulting bekerjasama dengan PT. Sarihusada Generasi Mahardika (SGM) dan Bumdes.id. PT. SGM memiliki pabrik yang berada di wilayah Desa Kemudo.</p>
                  <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <div class="rounded-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/homepage/image-portfolio-governance-1.png') }}" alt="" loading="lazy">
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a class="btn btn-outline-dark" href="">Lihat semua Portfolios</a>
            </div>
         </div>


         <div id="tab-akuntability" class="tab-content-portfolio d-none">
            <div class="row justify-content-between align-items-center my-4">
               <div class="col-lg-6 mb-lg-0 mb-3">
                  <h2 class="fw-600 mb-lg-4">Program Pendampingan Tata Kelola Keuangan Menggunakan Sistem Aplikasi Keuangan</h2>
                  <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Syncore Consulting mengembangkan sistem aplikasi akuntansi bumdes (SAAB) yang telah disesuaikan dengan SAK ETAP dan Peraturan Menteri Desa PDTT No 3 tahun 2021.</p>
                  <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <div class="rounded-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/homepage/image-portfolio-akuntability-1.png') }}" alt="" loading="lazy">
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a class="btn btn-outline-dark" href="">Lihat semua Portfolios</a>
            </div>
         </div>


         <div id="tab-sustainability" class="tab-content-portfolio d-none">
            <div class="row justify-content-between align-items-center my-4">
               <div class="col-lg-6 mb-lg-0 mb-3">
                  <h2 class="fw-600 mb-lg-4">Program CSR PT. Sarihusada Generasi Mahardika (Sgm) Peningkatan Ekonomi Warga Kalurahan Muja Muju Umbulharjo Yogyakarta Dengan Membangun Pasar Minggu Pagi (Sunmor Kerto)</h2>
                  <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Sejak masa pandemi covid 19 tahun 2021 hingga 2022 PT. SGM pun consen pada peningkatan pendapatan UMKM yang terdampak pandemi covid 19 di RW 9 dan RW 8 Kalurahan Muja Muju Umbulharjo.</p>
                  <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <div class="rounded-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/homepage/image-portfolio-sustainability-1.png') }}" alt="" loading="lazy">
                  </div>
               </div>
            </div>
            <div class="mt-5 text-center">
               <a class="btn btn-outline-dark" href="">Lihat semua Portfolios</a>
            </div>
         </div>

      </div>
   </section>
   <!-- end portfolio -->

   <!-- section article -->
   <section class="py-lg-5 py-3" id="article">
      <div class="background-article-home">
         <div class="container">
            <div class="text-center">
               <h2 class="text-orange fw-600">Artikel</h2>
            </div>
            <div class="row">
               <div class="col-12 mt-4">
                  <div class="swiper slider-article">
                     <div class="swiper-wrapper">

                        <div class="swiper-slide">
                           <div class="card card-body rounded-3 shadow-sm">
                              <div class="rounded-3 position-relative mb-2 overflow-hidden">
                                 <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                                 <img class="img-fluid w-100" src="{{ asset('storage/img/homepage/image-article-1.png') }}" alt="gambar artikel" loading="lazy">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Policy
                              </div>
                              <h5 class="fw-600 mb-5">Aspek-aspek yang Perlu diperhatikan Dalam Menganalisis Kelayakan Usaha</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img class="img-fluid" src="{{ asset('storage/img/homepage/image-user-article.png') }}" alt="gambar user" loading="lazy">
                                    </div>
                                    <div class="ms-2">
                                       <p class="fw-500 small m-0">Lana Steiner</p>
                                       <p class="text-secondary small m-0">18 Jan 2022</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="swiper-slide">
                           <div class="card card-body rounded-3 shadow-sm">
                              <div class="rounded-3 position-relative mb-2 overflow-hidden">
                                 <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                                 <img class="img-fluid w-100" src="{{ asset('storage/img/homepage/image-article-2.png') }}" alt="gambar artikel" loading="lazy">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Sustainability
                              </div>
                              <h5 class="fw-600 mb-5">Jenis-Jenis Desa Berdasarkan Tingkat Perkembangannya</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img class="img-fluid" src="{{ asset('storage/img/homepage/image-user-article.png') }}" alt="gambar user" loading="lazy">
                                    </div>
                                    <div class="ms-2">
                                       <p class="fw-500 small m-0">Lana Steiner</p>
                                       <p class="text-secondary small m-0">18 Jan 2022</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="swiper-slide">
                           <div class="card card-body rounded-3 shadow-sm">
                              <div class="rounded-3 position-relative mb-2 overflow-hidden">
                                 <div class="bg-light position-absolute rounded-3 end-0 me-3 fw-500 top-0 mt-3 border bg-opacity-75 p-2 shadow">52 mins</div>
                                 <img class="img-fluid w-100" src="{{ asset('storage/img/homepage/image-article-3.png') }}" alt="gambar artikel" loading="lazy">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Lingkungan
                              </div>
                              <h5 class="fw-600 mb-5">Pendampingan BUMDes Implementasi Dana Ketahanan Pangan</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img class="img-fluid" src="{{ asset('storage/img/homepage/image-user-article.png') }}" alt="gambar user" loading="lazy">
                                    </div>
                                    <div class="ms-2">
                                       <p class="fw-500 small m-0">Lana Steiner</p>
                                       <p class="text-secondary small m-0">18 Jan 2022</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>

                     <div class="swiper-pagination"></div>

                     <div class="swiper-button-prev d-none d-md-flex shadow"><i class="fa-solid fa-angle-left text-dark fa-2x"></i></div>
                     <div class="swiper-button-next d-none d-md-flex shadow"><i class="fa-solid fa-angle-right text-dark fa-2x"></i></div>
                  </div>
               </div>

               <div class="mt-5 text-center">
                  <a class="btn btn-outline-dark" href="">Lihat semua Artikel</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end article -->

   <!-- section testimonial -->
   {{-- <section id="testimonial" class="py-lg-5 py-3">
      <div class="container">
         <div class="text-center">
            <h2 class="fw-600 text-orange">Testimoni client</h2>
         </div>
         <div class="row">
            <div class="col-12 mt-4">
               <div class="swiper slider-testimoni">
                  <div class="swiper-wrapper">

                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-md-3 order-md-0 order-1">
                              <img loading="lazy" src="{{ asset('storage/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
                           </div>
                           <div class="col-md-7 mb-md-0 mb-4">
                              <p class="fw-400 text-dark-5">syncore consulting sangat membantu perusahaan saya untuk mengembangkan manajemen keuangan sehingga perusahaan saya dapat
                                 berkembang lebih baik.</p>
                              <p class="fw-600 text-dark-3 mt-4 mb-0">Dyandra cantika</p>
                              <p class="small text-secondary my-0">associate director at PT. sari husada </p>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-md-3 order-md-0 order-1">
                              <img loading="lazy" src="{{ asset('storage/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
                           </div>
                           <div class="col-md-7 mb-md-0 mb-4">
                              <p class="fw-400 text-dark-5">syncore consulting sangat membantu perusahaan saya untuk mengembangkan manajemen keuangan sehingga perusahaan saya dapat
                                 berkembang lebih baik.</p>
                              <p class="fw-600 text-dark-3 mt-4 mb-0">Dyandra cantika</p>
                              <p class="small text-secondary my-0">associate director at PT. sari husada </p>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-md-3 order-md-0 order-1">
                              <img loading="lazy" src="{{ asset('storage/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
                           </div>
                           <div class="col-md-7 mb-md-0 mb-4">
                              <p class="fw-400 text-dark-5">syncore consulting sangat membantu perusahaan saya untuk mengembangkan manajemen keuangan sehingga perusahaan saya dapat
                                 berkembang lebih baik.</p>
                              <p class="fw-600 text-dark-3 mt-4 mb-0">Dyandra cantika</p>
                              <p class="small text-secondary my-0">associate director at PT. sari husada </p>
                           </div>
                        </div>
                     </div>

                  </div>

                  <div class="swiper-pagination"></div>

                  <div class="swiper-button-prev d-none d-md-flex shadow"><i class="fa-solid fa-angle-left text-dark fa-2x"></i></div>
                  <div class="swiper-button-next d-none d-md-flex shadow"><i class="fa-solid fa-angle-right text-dark fa-2x"></i></div>
               </div>
            </div>

         </div>
      </div>
   </section> --}}
   <!-- end testimonial -->

   <!-- section banner -->
   <section class="py-lg-5 py-3" id="banner">
      <div class="background-banner-home">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <h2 class="fw-600">Ayo Coba Konsultasi Gratis</h2>
                  <p class="text-dark-5">Jangan ragu hubungi kami untuk mengatasi semua persoalan bisnis anda</p>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a class="btn btn-orange border py-2 px-3" href="#">Hubungi Kami</a>
                     <a class="btn btn-white border py-2 px-3" href="#">Daftar Program</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img class="img-fluid" src="{{ asset('storage/img/homepage/image-banner.png') }}" alt="gambar banner" loading="lazy">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->

   @push('script')
      <script>
         // custom script here

         // slider
         const sliderClient = new Swiper('.slider-client', {
            autoplay: {
               delay: 1000,
            },
            loop: true,
            breakpoints: {
               0: {
                  slidesPerView: 2,
                  spaceBetween: 70,
               },
               320: {
                  slidesPerView: 2,
                  spaceBetween: 100,
               },
               393: {
                  slidesPerView: 2,
                  spaceBetween: 50,
               },
               428: {
                  slidesPerView: 2,
                  spaceBetween: 20,
               },
               576: {
                  slidesPerView: 3,
                  spaceBetween: 120,
               },
               768: {
                  slidesPerView: 4,
                  spaceBetween: 150,
               },
               992: {
                  slidesPerView: 5,
                  spaceBetween: 160,
               },
               1200: {
                  slidesPerView: 6,
                  spaceBetween: 120,
               },
            },
         });

         const sliderHelp = new Swiper('.slider-help', {
            loop: true,
            centeredSlides: true,
            pagination: {
               el: ".swiper-pagination",
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
                  spaceBetween: 30,
               },
               768: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               },
               992: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               },
               1200: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               }
            },
         });

         const sliderArticle = new Swiper('.slider-article', {
            loop: true,
            centeredSlides: true,
            pagination: {
               el: ".swiper-pagination",
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
                  spaceBetween: 30,
               },
               768: {
                  slidesPerView: 2,
                  spaceBetween: 20,
               },
               992: {
                  slidesPerView: 3,
                  spaceBetween: 30,
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               },
               1200: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               }
            },
         });

         const sliderTestimoni = new Swiper('.slider-testimoni', {
            loop: true,
            centeredSlides: true,
            pagination: {
               el: ".swiper-pagination",
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
               },
               768: {
                  navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               },
            },
         });

         // tab portfolio
         const btnTabPortfolios = document.querySelectorAll('.btn-tab-portfolio')
         const tabContentPortfolios = document.querySelectorAll('.tab-content-portfolio')
         btnTabPortfolios.forEach(btn => btn.addEventListener('click', function() {
            tabId = this.dataset.target

            tabContentPortfolios.forEach(tab => tab.classList.add('d-none'))

            const tabContent = document.getElementById(tabId)
            tabContent.classList.remove('d-none')
         }))
      </script>
   @endpush
@endsection
