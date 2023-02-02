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
                  {{-- <a class="nav-link px-lg-3 {{ request()->is('media') ? 'active' : '' }}" href="{{ route('media') }}">Media</a> --}}
                  <a class="nav-link px-lg-3 {{ request()->is('mitra') ? 'active' : '' }}" href="{{ route('mitra') }}">Mitra</a>
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
         <div class="row">
            <div class="col-lg-3">
               <h6 class="mb-4">Program Pendampingan</h6>
               <div class="small mt-4">
                  <a href="#" class="nav-link text-dark-8 my-3">Dokumen SOP</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Feasibility Study</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Master Plan</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Keuangan dan Pajak</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Rencana Strategi</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Narasumber Pendampingan</a>
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Program Pelatihan</h6>
               <div class="small mt-4">
                  <a href="#" class="nav-link text-dark-8 my-3">Pelatihan e-SPI</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pelatihan Tata Kelola Kelembagaan dan Inovasi Usaha</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pelatihan Tata Kelola Manajemen Bisnis</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pelatihan Tata Kelola Keuangan Bisnis</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Digital Marketing</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Kemitraan Narasumber Pelatihan</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Kemitraan Event</a>
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Pendampingan Keuangan Menggunakan Sistem Akuntansi Analisis Bisnis</h6>
               <div class="small mt-4">
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB Rumah Sakit</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB Perguruan Tinggi</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB Perusahaan</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB Yayasan</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB BUMDes</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pendampingan SAAB UMKM</a>
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Pendampingan SHRM</h6>
               <div class="small mt-4">
                  <a href="#" class="nav-link text-dark-8 my-3">Rekrutmen</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Penempatan Kerja dan Outsuorcing</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Pengembangan SDM</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Evaluasi Kinerja</a>
                  <a href="#" class="nav-link text-dark-8 my-3">Remunerasi Karyawan</a>
               </div>
            </div>

            <div class="col-lg-3">
               <h6 class="mb-4">Program Scale Up & Inkubasi Bisnis</h6>
               <div class="small mt-4">
                  <a href="#" class="nav-link text-dark-8 my-3">Riset, Development, and Engineering Business (Setup Bisnis)</a>
                  <a href="#" class="nav-link text-dark-8 my-3"> Kemitraan Digital Marketing (Perluasan Pasar dan Peningkatan Penjualan)</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
