<div class="sticky-top">
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">
            <img loading="lazy" src="{{ asset('storage/img/logo-navbar.svg') }}" alt="logo syncore consulting">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-collapse">
            <i class="fa-solid fa-bars fa-xl text-orange"></i>
         </button>
         <div class="offcanvas offcanvas-end" id="nav-collapse">
            <div class="offcanvas-header">
               <img loading="lazy" src="{{ asset('storage/img/logo-navbar.svg') }}" alt="logo syncore consulting">
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="navbar-nav m-auto">
                  <a class="nav-link px-lg-3 {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                  <a class="nav-link px-lg-3 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                  <!-- dropdown menu program show in desktop -->
                  <a class="nav-link px-lg-3 dropdown-program d-none d-lg-block" href="javascript:void(0)">Program <i class="fa-solid fa-angle-down"></i></a>

                  <!-- dropdown menu program show in mobile & tablet -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle d-lg-none" href="#" role="button" data-bs-toggle="dropdown">Program</a>
                     <ul class="dropdown-menu border-0">
                        <li><a class="dropdown-item" href="#">Policy</a></li>
                        <li><a class="dropdown-item" href="#">Inovasi</a></li>
                        <li><a class="dropdown-item" href="#">Governance</a></li>
                        <li><a class="dropdown-item" href="#">Akuntabilitas</a></li>
                        <li><a class="dropdown-item" href="#">Sustainability</a></li>
                     </ul>
                  </li>
                  <a class="nav-link px-lg-3 {{ request()->is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                  <a class="nav-link px-lg-3 {{ request()->is('media') ? 'active' : '' }}" href="{{ route('media') }}">Media</a>
                  <a class="nav-link px-lg-3"{{ request()->is('mitra') ? 'active' : '' }}" href="{{ route('mitra') }}">Mitra</a>
                  <a href="#" class="btn btn-orange d-block d-lg-none mt-2 px-4">Hubungi Kami</a>
               </div>
            </div>
         </div>
         <div class="ms-auto d-none d-lg-block">
            <a href="#" class="btn btn-orange px-4">Hubungi Kami</a>
         </div>
      </div>
   </nav>

   <!-- dropdown menu program in desktop -->
   <div class="dropdown-menu-program d-none d-lg-block shadow">
      <div class="container py-4">
         <h5 class="text-dark-3 fw-600">Program</h5>
         <hr>
         <div class="row mt-4">
            <div class="col-lg-6 col-xl-4 mb-5">
               <a href="#" class="text-decoration-none menu-item-program">
                  <div class="card border-0 p-2">
                     <div class="row align-items-center">
                        <div class="col-3 fit-content">
                           <img loading="lazy" src="{{ asset('storage/img/icon-menu-policy.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-9">
                           <p class="text-dark-3 fw-600 mb-1">Policy</p>
                           <div class="small">
                              <p class="text-dark-5 small my-0">Berkolaborasi bersama akademisi untuk menghasilkan peraturan dan kebijakan yang berdampak besar</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-lg-6 col-xl-4 mb-5">
               <a href="#" class="text-decoration-none menu-item-program">
                  <div class="card border-0 p-2">
                     <div class="row align-items-center">
                        <div class="col-3 fit-content">
                           <img loading="lazy" src="{{ asset('storage/img/icon-menu-inovasi.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-9">
                           <p class="text-dark-3 fw-600 mb-1">Inovasi</p>
                           <div class="small">
                              <p class="text-dark-5 small my-0">Kami membantu membuat pelatihan dan pendampingan untuk masyarakat</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-lg-6 col-xl-4 mb-5">
               <a href="#" class="text-decoration-none menu-item-program">
                  <div class="card border-0 p-2">
                     <div class="row align-items-center">
                        <div class="col-3 fit-content">
                           <img loading="lazy" src="{{ asset('storage/img/icon-menu-governance.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-9">
                           <p class="text-dark-3 fw-600 mb-1">Governance</p>
                           <div class="small">
                              <p class="text-dark-5 small my-0">Membantu untuk melakukan revitalisasi kelembagaan agar bisa bersaing lagi di pasar</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-lg-6 col-xl-4 mb-5">
               <a href="#" class="text-decoration-none menu-item-program">
                  <div class="card border-0 p-2">
                     <div class="row align-items-center">
                        <div class="col-3 fit-content">
                           <img loading="lazy" src="{{ asset('storage/img/icon-menu-akuntabilitas.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-9">
                           <p class="text-dark-3 fw-600 mb-1">Akuntabilitas</p>
                           <div class="small">
                              <p class="text-dark-5 small my-0">Memberikan bantuan dalam Bidang Keuangan, Manajemen, Digitalisasi, Penilaian Kinerja</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>

            <div class="col-lg-6 col-xl-4 mb-5">
               <a href="#" class="text-decoration-none menu-item-program">
                  <div class="card border-0 p-2">
                     <div class="row align-items-center">
                        <div class="col-3 fit-content">
                           <img loading="lazy" src="{{ asset('storage/img/icon-menu-sustainability.svg') }}" class="img-fluid">
                        </div>
                        <div class="col-9">
                           <p class="text-dark-3 fw-600 mb-1">Sustainability</p>
                           <div class="small">
                              <p class="text-dark-5 small my-0">Memberikan pandangan dan pertimbangan untuk sebuah keberlanjutan dalam bidang sosial lingkungan dan ekonomi</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
