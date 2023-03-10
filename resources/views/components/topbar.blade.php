<nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">

   <!-- Sidebar Toggle (Topbar) -->
   <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop">
      <i class="fa fa-bars"></i>
   </button>

   <h3 class="text-gray-700">{{ $title }}</h3>

   <!-- Topbar Navbar -->
   <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="d-none d-lg-inline small mr-2 text-gray-600">{{ auth()->user()->name }}</span>
            <img class="img-profile rounded-circle" src="{{ asset('storage/img/undraw_profile.svg') }}">
         </a>
         <!-- Dropdown - User Information -->
         <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow" aria-labelledby="userDropdown">
            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="#">
               <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
               Logout
            </a>
         </div>
      </li>

   </ul>

</nav>

<div class="modal fade" id="logoutModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
         <div class="modal-body text-center">Pilih <span class="fw-bold">Logout</span> Untuk Mengakhiri Sesi</div>
         <div class="modal-footer border-0 pt-0 d-flex justify-content-center">
            <button class="btn btn-secondary btn-sm px-4" data-dismiss="modal" type="button">Batal</button>
            <form action="{{ route('logout') }}" method="post">
               @csrf
               <button type="submit" class="btn btn-orange btn-sm px-4">Logout</button>
            </form>
         </div>
      </div>
   </div>
</div>
