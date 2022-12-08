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
         <div class="d-flex flex-column flex-md-row justify-content-lg-evenly mt-5">
            <button class="btn btn-tab-mitra py-2 bg-orange-active" data-target="tab-semua">Semua</button>
            <button class="btn btn-tab-mitra py-2" data-target="tab-pemerintah">Pemerintah</button>
            <button class="btn btn-tab-mitra py-2" data-target="tab-pendidikan">Institusi Pendidikan</button>
            <button class="btn btn-tab-mitra py-2" data-target="tab-non-pemerintah">Organisasi Non Pemerintah</button>
            <button class="btn btn-tab-mitra py-2" data-target="tab-comunity">Comunity</button>
         </div>
         <hr class="d-none d-md-block mt-3 mb-5">

         <div id="tab-semua" class="tab-content-mitra py-5">
            <h3 class="text-orange fw-700">Semua Mitra</h3>
            <div class="row mt-4">

               <div class="col-md-4 px-2 mb-2">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Kesehatan Kota Tangerang Selatan.png') }}" alt="Dinas Kesehatan Kota Tangerang Selatan" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSP Karawang.png') }}" alt="RSP Karawang" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/UPDB TANGERANG.png') }}" alt="UPDB TANGERANG" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSUD BATANG.png') }}" alt="RSUD BATANG" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Pemda Kota Serang.png') }}" alt="Pemda Kota Serang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/SMKN 6 Yogyakarta.png') }}" alt="SMKN 6 Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Bank Indonesia Yogyakarta.png') }}" alt="Bank Indonesia Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Buana Perjuangan Karawang.png') }}" alt="Universitas Buana Perjuangan Karawang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Kementrian Lingkungan Hidup.png') }}" alt="Kementrian Lingkungan Hidup" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Eratani Teknologi Nusantara.png') }}" alt="PT. Eratani Teknologi Nusantara" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/NSLIC.png') }}" alt="NSLIC" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Perdami.png') }}" alt="Perdami" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. bank Rakyat Indonesia.png') }}" alt="PT. bank Rakyat Indonesia" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Berau Coal.png') }}" alt="PT. Berau Coal" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Sarihusada Generasi Mahardika.png') }}" alt="PT. Sarihusada Generasi Mahardika" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Bank Indonesia Kalimantan Tengah.png') }}" alt="Bank Indonesia Kalimantan Tengah" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Surfaid.png') }}" alt="Surfaid" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Charlie Hospital.png') }}" alt="PT. Charlie Hospital" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/BBLM Yogyakarta.png') }}" alt="BBLM Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/YEWI.png') }}" alt="YEWI" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RS PKU Muhammadiyah Delangu.png') }}" alt="RS PKU Muhammadiyah Delangu" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/TNP2K.png') }}" alt="TNP2K" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Wahana Visi.png') }}" alt="Wahana Visi" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Yayasan Islamic Center Bin Baz.png') }}" alt="Yayasan Islamic Center Bin Baz" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Biro Binabermas Yogyakarta.png') }}" alt="Biro Binabermas Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Koperasi dan UKM Sleman.png') }}" alt="Dinas Koperasi dan UKM Sleman" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Mitra Bumdes Nusantara.png') }}" alt="PT. Mitra Bumdes Nusantara" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Yayasan Nurfadilah.png') }}" alt="Yayasan Nurfadilah" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Kesehatan Karawang.png') }}" alt="Dinas Kesehatan Karawang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSUD Kota Tangerang.png') }}" alt="RSUD Kota Tangerang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Pancasila.png') }}" alt="Universitas Pancasila" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas muhammadiyah yogyakarta.png') }}" alt="universitas muhammadiyah yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas Dahasen Bengkulu.png') }}" alt="universitas Dahasen Bengkulu" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas Negeri Semarang.png') }}" alt="universitas Negeri Semarang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas muhammadiyah Palembang.png') }}" alt="universitas muhammadiyah Palembang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/STT pagaralam Palembang.png') }}" alt="STT pagaralam Palembang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Trunojoyo.png') }}" alt="Universitas Trunojoyo" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Ahmad Dalan.png') }}" alt="Universitas Ahmad Dalan" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Janabadra.png') }}" alt="Universitas Janabadra" class="img-fluid">
               </div>
               
            </div>
         </div>

         <div id="tab-pemerintah" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Pemerintah</h3>
            <div class="row mt-4">

               <div class="col-md-4 px-2 mb-2">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Kesehatan Kota Tangerang Selatan.png') }}" alt="Dinas Kesehatan Kota Tangerang Selatan" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSP Karawang.png') }}" alt="RSP Karawang" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/UPDB TANGERANG.png') }}" alt="UPDB TANGERANG" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSUD BATANG.png') }}" alt="RSUD BATANG" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Pemda Kota Serang.png') }}" alt="Pemda Kota Serang" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. bank Rakyat Indonesia.png') }}" alt="PT. bank Rakyat Indonesia" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Bank Indonesia Yogyakarta.png') }}" alt="Bank Indonesia Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Kementrian Lingkungan Hidup.png') }}" alt="Kementrian Lingkungan Hidup" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Bank Indonesia Kalimantan Tengah.png') }}" alt="Bank Indonesia Kalimantan Tengah" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/BBLM Yogyakarta.png') }}" alt="BBLM Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Biro Binabermas Yogyakarta.png') }}" alt="Biro Binabermas Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Koperasi dan UKM Sleman.png') }}" alt="Dinas Koperasi dan UKM Sleman" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Dinas Kesehatan Karawang.png') }}" alt="Dinas Kesehatan Karawang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RSUD Kota Tangerang.png') }}" alt="RSUD Kota Tangerang" class="img-fluid">
               </div>
               
            </div>
         </div>

         <div id="tab-pendidikan" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Institusi Pendidikan</h3>
            <div class="row mt-4">

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/SMKN 6 Yogyakarta.png') }}" alt="SMKN 6 Yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Buana Perjuangan Karawang.png') }}" alt="Universitas Buana Perjuangan Karawang" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Janabadra.png') }}" alt="Universitas Janabadra" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Pancasila.png') }}" alt="Universitas Pancasila" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas muhammadiyah yogyakarta.png') }}" alt="universitas muhammadiyah yogyakarta" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas Dahasen Bengkulu.png') }}" alt="universitas Dahasen Bengkulu" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas Negeri Semarang.png') }}" alt="universitas Negeri Semarang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/universitas muhammadiyah Palembang.png') }}" alt="universitas muhammadiyah Palembang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/STT pagaralam Palembang.png') }}" alt="STT pagaralam Palembang" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Trunojoyo.png') }}" alt="Universitas Trunojoyo" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Universitas Ahmad Dalan.png') }}" alt="Universitas Ahmad Dalan" class="img-fluid">
               </div>
               
            </div>
         </div>

         <div id="tab-non-pemerintah" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Organisasi Non Pemerintah</h3>
            <div class="row mt-4">

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Eratani Teknologi Nusantara.png') }}" alt="PT. Eratani Teknologi Nusantara" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/NSLIC.png') }}" alt="NSLIC" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Perdami.png') }}" alt="Perdami" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Berau Coal.png') }}" alt="PT. Berau Coal" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Sarihusada Generasi Mahardika.png') }}" alt="PT. Sarihusada Generasi Mahardika" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Mitra Bumdes Nusantara.png') }}" alt="PT. Mitra Bumdes Nusantara" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Surfaid.png') }}" alt="Surfaid" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/PT. Charlie Hospital.png') }}" alt="PT. Charlie Hospital" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/YEWI.png') }}" alt="YEWI" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Yayasan Nurfadilah.png') }}" alt="Yayasan Nurfadilah" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/RS PKU Muhammadiyah Delangu.png') }}" alt="RS PKU Muhammadiyah Delangu" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Yayasan Islamic Center Bin Baz.png') }}" alt="Yayasan Islamic Center Bin Baz" class="img-fluid">
               </div>

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/TNP2K.png') }}" alt="TNP2K" class="img-fluid">
               </div>
               
               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Wahana Visi.png') }}" alt="Wahana Visi" class="img-fluid">
               </div>
               
            </div>
         </div>

         <div id="tab-comunity" class="tab-content-mitra d-none py-5">
            <h3 class="text-orange fw-700">Comunity</h3>
            <div class="row mt-4">

               <div class="col-md-4 px-2 mb-3">
                  <img loading="lazy" src="{{ asset('storage/img/mitra/Perdami.png') }}" alt="Perdami" class="img-fluid">
               </div>

            </div>
         </div>
      </div>
   </section>
   <!-- end mitra -->


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
