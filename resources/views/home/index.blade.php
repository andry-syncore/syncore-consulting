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
               <div class="col-lg-5">
                  <div class="text-lg-start text-center">
                     <h1 class="fw-600 text-orange">We provide the best Methode for your business</h1>
                     <p class="text-dark-3">Syncore consulting membantu anda dalam pengelolaan keuangan, manajamen bisnis, dan program</p>
                  </div>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a href="#" class="btn btn-orange border py-2 px-3">Hubungi Kami</a>
                     <a href="#" class="btn btn-white border py-2 px-3">Daftar Program</a>
                  </div>
               </div>
               <div class="col-lg-5">
                  <img loading="lazy" src="{{ asset('assets/img/homepage/image-hero.png') }}" alt="gambar hero" class="img-fluid w-100">
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section client -->
   <section id="client" class="py-lg-5 py-3">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-9">
               <div class="px-5 text-center">
                  <h2 class="text-orange fw-600 mb-3">Dicintai oleh lebih dari puluhan Klien</h2>
                  <h5 class="text-dark-3 fw-400">kami mengakui klien kami adalah ahli di industri mereka dan kami memastikan untuk membuat kinerja terbaik untuk mencapai tujuan mereka
                  </h5>
               </div>
            </div>
            <div class="col-12 mt-4">
               <div class="swiper slider-client">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-1.svg') }}" alt="logo slider"></div>
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-2.svg') }}" alt="logo slider"></div>
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-3.svg') }}" alt="logo slider"></div>
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-4.svg') }}" alt="logo slider"></div>
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-5.svg') }}" alt="logo slider"></div>
                     <div class="swiper-slide"><img loading="lazy" src="{{ asset('assets/img/homepage/logo-slider-6.svg') }}" alt="logo slider"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end client -->

   <!-- section reason -->
   <section id="reason" class="py-lg-5 py-3">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
               <img loading="lazy" src="{{ asset('assets/img/homepage/image-section-reason.png') }}" alt="gambar section teknologi" class="img-fluid w-100">
            </div>
            <div class="col-lg-6">
               <h1 class="text-orange fw-600">Kenapa Harus Syncore Consulting?</h1>
               <p class="text-dark-3">Syncore Consulting memiliki metodologi yang sudah teruji selama 12 tahun. Metodologi yang kami kembangkan dikenal sebagai ATMR
                  (Asses-Treat-Monitor-Review). Metodologi ini memungkinkan kami untuk melakukan proyek berskala besar, kebutuhan khusus, sistematis, dan berkelanjutan. Selain
                  memiliki metodologi yang teruji, kami memiliki nilai-nilai yang selalu kami jaga, yaitu : </p>

               <ul class="text-dark-5" id="list-reason">
                  <div class="row">
                     <div class="col-2 text-lg-end">
                        <img loading="lazy" src="{{ asset('assets/img/calendar-icon.svg') }}" alt="icon" class="img-fluid">
                     </div>
                     <div class="col-10">
                        <li>Menjalin kerjasama dan kolaborasi jangka panjang (Long-term partnership & collaboration)</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img loading="lazy" src="{{ asset('assets/img/price-icon.svg') }}" alt="icon" class="img-fluid">
                     </div>
                     <div class="col-10">
                        <li>Selalu memberikan nilai lebih kepada client (Always Deliver Values)</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img loading="lazy" src="{{ asset('assets/img/puzzle-icon.svg') }}" alt="icon" class="img-fluid">
                     </div>
                     <div class="col-10">
                        <li>Menjunjung tinggi kejujuran, kepercayaan, dan bersikap terbuka (Open & Trustworthy)</li>
                     </div>

                     <div class="col-2 text-lg-end">
                        <img loading="lazy" src="{{ asset('assets/img/rocket-icon.svg') }}" alt="icon" class="img-fluid">
                     </div>
                     <div class="col-10">
                        <li>Selalu menyelesaikan tugas yang sudah dimulai (finished what we started)</li>
                     </div>
                  </div>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- end reason -->

   <!-- section help -->
   <section id="help" class="py-lg-5 py-3">
      <div class="background-help-home">
         <div class="container">
            <div class="text-center">
               <h2 class="text-orange fw-600">Bagaimana Kami Dapat Membantu Anda?</h2>
               <p class="text-dark-5">Syncore consulting hadir untuk mengatasi semua permasalahan bisnis anda</p>
            </div>
            <div class="row">
               <div class="col-12 mt-4">
                  <div class="swiper slider-help">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/card-slider-1.png') }}" alt="card slider" class="img-fluid">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/card-slider-2.png') }}" alt="card slider" class="img-fluid">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/card-slider-3.png') }}" alt="card slider" class="img-fluid">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/card-slider-4.png') }}" alt="card slider" class="img-fluid">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/card-slider-5.png') }}" alt="card slider" class="img-fluid">
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
   <section id="portfolio" class="py-lg-5 py-3">
      <div class="container">
         <div class="text-center">
            <h2 class="text-orange fw-600">Portofolio</h2>
            <p class="text-dark-5">Kepercayaan klien merupakan prioritas kami. Berikut berbagai program yang telah dipercayakan kepada kami</p>
         </div>
         <div class="row justify-content-lg-between mt-5">
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2 bg-orange-active px-lg-5 mb-2 mb-md-0 px-3">Policy</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Inovasi</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Governance</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Akuntability</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-portfolio py-2">Sustainability</button>
               <hr class="d-block d-md-none my-0">
            </div>
         </div>
         <hr class="d-none d-md-block my-3">
         <div class="row justify-content-between align-items-center my-4">
            <div class="col-lg-6 mb-lg-0 mb-3">
               <h2 class="fw-600 mb-lg-4">Program Pendampingan Pengembangan Website Marketplace Belanja Kalteng</h2>
               <p class="text-dark-5 fw-400 mb-lg-4 mb-2">Merupakan program pendampingan yang bekerjasama dengan PT. Sari Husada</p>
               <a href="" class="text-orange text-decoration-none fw-600">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
               <div class="rounded-4 overflow-hidden">
                  <img loading="lazy" src="{{ asset('assets/img/homepage/image-portfolio-1.png') }}" alt="" class="img-fluid">
               </div>
            </div>
         </div>
         <div class="mt-5 text-center">
            <a href="" class="btn btn-outline-dark">Lihat semua Portfolios</a>
         </div>
      </div>
   </section>
   <!-- end portfolio -->

   <!-- section article -->
   <section id="article" class="py-lg-5 py-3">
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
                                 <img loading="lazy" src="{{ asset('assets/img/homepage/image-article-1.png') }}" alt="gambar artikel" class="img-fluid w-100">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Lingkungan
                              </div>
                              <h5 class="fw-600 mb-5">BUMDes Riau Raih Omzet Rp 149 Miliar, Terbesar di Indonesia</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img loading="lazy" src="{{ asset('assets/img/homepage/image-user-article.png') }}" alt="gambar user" class="img-fluid">
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
                                 <img loading="lazy" src="{{ asset('assets/img/homepage/image-article-1.png') }}" alt="gambar artikel" class="img-fluid w-100">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Lingkungan
                              </div>
                              <h5 class="fw-600 mb-5">BUMDes Riau Raih Omzet Rp 149 Miliar, Terbesar di Indonesia</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img loading="lazy" src="{{ asset('assets/img/homepage/image-user-article.png') }}" alt="gambar user" class="img-fluid">
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
                                 <img loading="lazy" src="{{ asset('assets/img/homepage/image-article-1.png') }}" alt="gambar artikel" class="img-fluid w-100">
                              </div>
                              <div class="alert alert-primary rounded-3 fw-600 alert-fit-content py-2" role="alert">
                                 Lingkungan
                              </div>
                              <h5 class="fw-600 mb-5">BUMDes Riau Raih Omzet Rp 149 Miliar, Terbesar di Indonesia</h5>
                              <div class="card-footer bg-transparent px-0">
                                 <div class="d-flex align-items-center">
                                    <div class="rounded-circle overflow-hidden">
                                       <img loading="lazy" src="{{ asset('assets/img/homepage/image-user-article.png') }}" alt="gambar user" class="img-fluid">
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
                  <a href="" class="btn btn-outline-dark">Lihat semua Artikel</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end article -->

   <!-- section testimonial -->
   <section id="testimonial" class="py-lg-5 py-3">
      <div class="container">
         <div class="text-center">
            <h2 class="fw-600">Apa yang Mereka katakan <span class="text-orange">Tentang Kami</span></h2>
         </div>
         <div class="row">
            <div class="col-12 mt-4">
               <div class="swiper slider-testimoni">
                  <div class="swiper-wrapper">

                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-md-3 order-md-0 order-1">
                              <img loading="lazy" src="{{ asset('assets/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
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
                              <img loading="lazy" src="{{ asset('assets/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
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
                              <img loading="lazy" src="{{ asset('assets/img/homepage/image-testimoni.png') }}" alt="gambar testimoni user" class="img-fluid">
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
   </section>
   <!-- end testimonial -->

   <!-- section banner -->
   <section id="banner" class="py-lg-5 py-3">
      <div class="background-banner-home">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <h2 class="fw-600">Mari Bergabung Bersama Kami</h2>
                  <p class="text-dark-5">Hubungi kami untuk mengatasi semua persoalan bisnis anda</p>

                  <div class="d-grid d-md-block my-5 gap-2">
                     <a href="#" class="btn btn-orange border py-2 px-3">Hubungi Kami</a>
                     <a href="#" class="btn btn-white border py-2 px-3">Daftar Program</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <img loading="lazy" src="{{ asset('assets/img/homepage/image-banner.png') }}" alt="gambar banner" class="img-fluid">
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
      </script>
   @endpush
@endsection
