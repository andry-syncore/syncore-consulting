<ul class="navbar-nav bg-orange sidebar sidebar-dark accordion" id="sidebarConsulting">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon">
         <i class="fa-solid fa-house-chimney fa-lg"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Syncore</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item {{ Route::is('dashboard*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('dashboard') }}">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Menu
   </div>

   <li class="nav-item {{ Route::is('category_portfolios*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('category_portfolios.index') }}">
         <i class="fa-solid fa-newspaper"></i>
         <span>Kategori Portfolio</span></a>
   </li>

   <li class="nav-item {{ Route::is('portfolios*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('portfolios.index') }}">
         <i class="fa-solid fa-newspaper"></i>
         <span>Portfolio</span></a>
   </li>

   <li class="nav-item {{ Route::is('documents*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('documents.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Dokumen</span></a>
   </li>

   <li class="nav-item {{ Route::is('program-pendampingan*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('program-pendampingan.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Program Pendampingan</span></a>
   </li>

   <li class="nav-item {{ Route::is('program-pelatihan*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('program-pelatihan.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Program Pelatihan</span></a>
   </li>

   <li class="nav-item {{ Route::is('pendampingan-saab*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('pendampingan-saab.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Pendampingan SAAB</span></a>
   </li>

   <li class="nav-item {{ Route::is('pendampingan-shrm*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('pendampingan-shrm.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Pendampingan SHRM</span></a>
   </li>

   <li class="nav-item {{ Route::is('inkubasi-bisnis*') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('inkubasi-bisnis.index') }}">
         <i class="fa-solid fa-file-lines"></i>
         <span>Inkubasi Bisnis</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="d-none d-md-inline text-center">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
