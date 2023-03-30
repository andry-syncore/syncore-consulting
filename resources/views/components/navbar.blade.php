<div class="sticky-top">
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/img/logo-navbar.svg') }}" alt="logo syncore consulting" loading="lazy">
         </a>
         <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#nav-collapse" type="button">
            <i class="fa-solid fa-bars fa-xl text-orange"></i>
         </button>
         <div class="offcanvas offcanvas-end" id="nav-collapse">
            <div class="offcanvas-header">
               <img src="{{ asset('storage/img/logo-navbar.svg') }}" alt="logo syncore consulting" loading="lazy">
               <button class="btn-close" data-bs-dismiss="offcanvas" type="button" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="navbar-nav m-auto">
                  <a class="nav-link px-lg-3 {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                  <a class="nav-link px-lg-3 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                  <!-- dropdown menu program show in desktop -->
                  <a class="nav-link px-lg-3 dropdown-program d-none d-lg-block" href="javascript:void(0)">Program <i class="fa-solid fa-angle-down"></i></a>

                  <!-- dropdown menu program show in mobile & tablet -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle d-lg-none" data-bs-toggle="dropdown" href="#" role="button">Program</a>
                     <ul class="dropdown-menu border-0">
                        <li>
                           <p class="m-0">Program Pendampingan</p>
                        </li>
                        <li><a class="dropdown-item" href="#">Dokumen SOP</a></li>
                        <li><a class="dropdown-item" href="#">Feasibility Study</a></li>
                        <li><a class="dropdown-item" href="#">Master Plan</a></li>
                        <li><a class="dropdown-item" href="#">Keuangan dan Pajak</a></li>
                        <li><a class="dropdown-item" href="#">Rencana Strategi</a></li>
                        <li><a class="dropdown-item" href="#">Narasumber Pendampingan</a></li>

                        <div class="dropdown-divider"></div>

                        <li>
                           <p class="m-0">Program Pelatihan</p>
                        </li>
                        <li><a class="dropdown-item" href="#">Pelatihan e-SPI</a></li>
                        <li><a class="dropdown-item" href="#">Pelatihan Tata Kelola Kelembagaan dan Inovasi Usaha</a></li>
                        <li><a class="dropdown-item" href="#">Pelatihan Tata Kelola Manajemen Bisnis</a></li>
                        <li><a class="dropdown-item" href="#">Pelatihan Tata Kelola Keuangan Bisnis</a></li>
                        <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Kemitraan Narasumber Pelatihan</a></li>
                        <li><a class="dropdown-item" href="#">Kemitraan Event</a></li>

                        <div class="dropdown-divider"></div>

                        <li>
                           <p class="m-0">Pendampingan Keuangan Menggunakan Sistem Akuntansi Analisis Bisnis</p>
                        </li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB Rumah Sakit</a></li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB Perguruan Tinggi</a></li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB Perusahaan</a></li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB Yayasan</a></li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB BUMDes</a></li>
                        <li><a class="dropdown-item" href="#">Pendampingan SAAB UMKM</a></li>

                        <div class="dropdown-divider"></div>

                        <li>
                           <p class="m-0">Pendampingan SHRM</p>
                        </li>
                        <li><a class="dropdown-item" href="#">Rekrutmen</a></li>
                        <li><a class="dropdown-item" href="#">Penempatan Kerja dan Outsourcing</a></li>
                        <li><a class="dropdown-item" href="#">Pengembangan SDM</a></li>
                        <li><a class="dropdown-item" href="#">Evaluasi Kinerja</a></li>
                        <li><a class="dropdown-item" href="#">Remunerasi Karyawan</a></li>

                        <div class="dropdown-divider"></div>

                        <li>
                           <p class="m-0">Program Scale Up & Inkubasi Bisnis</p>
                        </li>
                        <li><a class="dropdown-item" href="#">Riset, Development, and Engineering Business (Setup Bisnis)</a></li>
                        <li><a class="dropdown-item" href="#"> Kemitraan Digital Marketing (Perluasan Pasar dan Peningkatan Penjualan)</a></li>
                     </ul>
                  </li>
                  <a class="nav-link px-lg-3 {{ request()->is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                  {{-- <a class="nav-link px-lg-3 {{ request()->is('media') ? 'active' : '' }}" href="{{ route('media') }}">Media</a> --}}
                  <a class="nav-link px-lg-3 {{ request()->is('mitra') ? 'active' : '' }}" href="{{ route('mitra') }}">Mitra</a>
                  <a class="nav-link px-lg-3 {{ request()->is('document*') ? 'active' : '' }}" href="{{ route('document.index') }}">Download</a>
                  <a class="nav-link px-lg-3" href="https://blog.syncoreconsulting.com/">Blog</a>
                  <a class="btn btn-orange d-block d-lg-none mt-2 px-4" href="#">Hubungi Kami</a>
               </div>
            </div>
         </div>
         <div class="ms-auto d-none d-lg-block">
            <a class="btn btn-orange px-4" href="#">Hubungi Kami</a>
         </div>
      </div>
   </nav>

   <!-- dropdown menu program in desktop -->
   <div class="dropdown-menu-program d-none d-lg-block shadow">
      <div class="container py-4">
         <div class="row">
            <div class="col-lg-3">
               <h6 class="mb-4">Program Pendampingan</h6>
               <div class="small mt-4">
                  @foreach ($pendampingans as $pendampingan)
                     <a class="nav-link text-dark-8 my-3" href="{{ route('program-pendampingan.show', $pendampingan) }}">{{ $pendampingan->name }}</a>
                  @endforeach
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Program Pelatihan</h6>
               <div class="small mt-4">
                  @foreach ($pelatihans as $pelatihan)
                     <a class="nav-link text-dark-8 my-3" href="{{ route('program-pelatihan.show', $pelatihan) }}">{{ $pelatihan->name }}</a>
                  @endforeach
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Pendampingan Keuangan Menggunakan Sistem Akuntansi Analisis Bisnis</h6>
               <div class="small mt-4">
                  @foreach ($keuangan as $saab)
                     <a class="nav-link text-dark-8 my-3" href="{{ route('pendampingan-saab.show', $saab) }}">{{ $saab->name }}</a>
                  @endforeach

               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Pendampingan SHRM</h6>
               <div class="small mt-4">
                  <a class="nav-link text-dark-8 my-3" href="#">Rekrutmen</a>
                  <a class="nav-link text-dark-8 my-3" href="#">Penempatan Kerja dan Outsourcing</a>
                  <a class="nav-link text-dark-8 my-3" href="#">Pengembangan SDM</a>
                  <a class="nav-link text-dark-8 my-3" href="#">Evaluasi Kinerja</a>
                  <a class="nav-link text-dark-8 my-3" href="#">Remunerasi Karyawan</a>
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Program Scale Up & Inkubasi Bisnis</h6>
               <div class="small mt-4">
                  <a class="nav-link text-dark-8 my-3" href="#">Riset, Development, and Engineering Business (Setup Bisnis)</a>
                  <a class="nav-link text-dark-8 my-3" href="#"> Kemitraan Digital Marketing (Perluasan Pasar dan Peningkatan Penjualan)</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- ###################################################################################################################################################### -->
<!-- OLD NAVBAR (DONT DELETE) -->
{{-- <div class="col-lg-6 col-xl-4 mb-5">
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
</div> --}}
