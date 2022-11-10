<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm">
   <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
         <img src="{{ asset('assets/img/logo-navbar.svg') }}" alt="logo syncore consulting">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-collapse">
         <i class="fa-solid fa-bars fa-xl text-orange"></i>
      </button>
      <div class="offcanvas offcanvas-end" id="nav-collapse">
         <div class="offcanvas-header">
            <img src="{{ asset('assets/img/logo-navbar.svg') }}" alt="logo syncore consulting">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div class="navbar-nav m-auto">
               <a class="nav-link px-lg-3 {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
               <a class="nav-link px-lg-3" href="#">Tentang Kami</a>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle px-lg-3" href="#" role="button" data-bs-toggle="dropdown">Program</a>
                  <ul class="dropdown-menu border-0 shadow-sm">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
               </li>
               <a class="nav-link px-lg-3" href="#">Portfolio</a>
               <a class="nav-link px-lg-3" href="#">Media</a>
               <a class="nav-link px-lg-3" href="#">Mitra</a>
               <a href="#" class="btn btn-orange d-block d-lg-none mt-2 px-4">Hubungi Kami</a>
            </div>
         </div>
      </div>
      <div class="ms-auto d-none d-lg-block">
         <a href="#" class="btn btn-orange px-4">Hubungi Kami</a>
      </div>
   </div>
</nav>
