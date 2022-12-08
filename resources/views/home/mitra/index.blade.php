@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <!-- hero -->
   <header class="pb-lg-5">
      <div class="background-hero-mitra">
         <div class="container">
            <div class="row align-items-lg-center justify-content-lg-between py-5">
               <div class="col-lg-6">
                  <div class="text-lg-start text-center">
                     <h1 class="fw-600 text-orange">Mitra</h1>
                     <p class="text-dark-3">Kami berkolaborasi bersama berbagai mitra strategis dengan setara. Mari berkolaborasi, mari menjadi Pijarian!</p>
                  </div>
               </div>
               <div class="col-lg-5">
                  <img class="img-fluid w-100" src="{{ asset('storage/img/mitra/image-hero.png') }}" alt="gambar hero" loading="lazy">
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end hero -->

   <!-- section mitra -->
   <section class="py-lg-5 py-3" id="mitra">
      <div class="container">
         <div class="row justify-content-lg-between mt-5">
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-mitra py-2 bg-orange-active" data-target="tab-semua">Semua</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-mitra py-2" data-target="tab-pemerintah">Pemerintah</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-mitra py-2" data-target="tab-pendidikan">Institusi Pendidikan</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-mitra py-2" data-target="tab-non-pemerintah">Organisasi Non Pemerintah</button>
               <hr class="d-block d-md-none my-0">
            </div>
            <div class="col-12 col-md mb-lg-0 text-lg-center mb-1">
               <button class="btn btn-tab-mitra py-2" data-target="tab-comunity">Comunity</button>
               <hr class="d-block d-md-none my-0">
            </div>
         </div>
         <hr class="d-none d-md-block mt-3 mb-5">

         <div id="tab-semua" class="tab-content-mitra py-5">
            <h3 class="text-orange fw-700">Semua Mitra</h3>
            <div class="row">
               <div class="col-md-4">

               </div>
            </div>
         </div>

         <div id="tab-pemerintah" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Pemerintah</h3>
            <div class="row">
               <div class="col-md-4">

               </div>
            </div>
         </div>

         <div id="tab-pendidikan" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Institusi Pendidikan</h3>
            <div class="row">
               <div class="col-md-4">

               </div>
            </div>
         </div>

         <div id="tab-non-pemerintah" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Organisasi Non Pemerintah</h3>
            <div class="row">
               <div class="col-md-4">

               </div>
            </div>
         </div>
         
         <div id="tab-comunity" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Comunity</h3>
            <div class="row">
               <div class="col-md-4">

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end portfolio -->


   @push('script')
      <script>
         // custom script here
         // tab mitra
         const tabContentMitras = document.querySelectorAll('.tab-content-mitra')
         btnTabMitras.forEach(btn => btn.addEventListener('click', function() {
            tabId = this.dataset.target

            tabContentMitras.forEach(tab => tab.classList.add('d-none'))

            const tabContent = document.getElementById(tabId)
            tabContent.classList.remove('d-none')
         }))
      </script>
   @endpush
@endsection
