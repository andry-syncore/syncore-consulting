@extends('home.layouts.app')
@section('content')
   <section id="download">
      <div class="bg-light">
         <div class="container py-5">
            <div class="row align-items-center mb-5">
               <div class="col-md-6 order-md-0 mb-md-0 order-1 mb-4">
                  <div class="row justify-content-center justify-content-md-start">
                     <div class="col-md-2 text-md-end mb-md-0 mb-2 text-center">
                        <i class="fa-solid fa-download text-orange fa-3x"></i>
                     </div>
                     <div class="col-md-10 text-md-start text-center">
                        <h1 class="text-orange m-0 p-0" style="font-weight: 600">Unduh Berkas</h1>
                        <p class="my-2 p-0">Unduh berkas materi Syncore Consulting</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 order-0 order-md-1 text-md-end d-none d-md-block text-center">
                  <img class="img-fluid w-75" src="{{ asset('storage/img/download.svg') }}" alt="">
               </div>
            </div>

            <!-- card form cari -->
            <div class="card card-body rounded-5 p-4 shadow-sm">
               <h5 class="mt-0 mb-4 p-0" style="font-weight: 600">Cari Dokumen Kebutuhan Anda</h5>
               <form action="" method="get">
                  <div class="row align-items-end">
                     <div class="col-lg-4 mb-2">
                        <label class="small mb-2" for="search" style="font-weight: 600">Kata kunci pencarian</label>
                        <div class="input-group">
                           <span class="input-group-text bg-transparent"><i class="fa-solid fa-magnifying-glass text-orange"></i></span>
                           <input class="form-control border-start-0" id="search" name="search" type="text" value="{{ request()->search }}" placeholder="Cari dokumen...">
                        </div>
                     </div>
                     <div class="col-lg-2 mb-2">
                        <button class="btn btn-orange text-light w-100" type="submit"><i class="fa-solid fa-magnifying-glass text-light"></i> Cari Sekarang</button>
                     </div>
                  </div>
               </form>
            </div>

            <!-- card tabel -->
            <div class="card card-body rounded-5 my-4 p-4 shadow-sm">
               @if (session()->has('error'))
                  <div class="alert alert-danger text-center">
                     {{ session()->get('error') }}
                  </div>
               @endif

               <ol class="list-group list-group-numbered border-0">
                  @foreach ($categories as $category)
                     <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                        <div class="ms-2 me-auto">
                           <div class="fw-bold mb-2">{{ $category->name }}</div>
                           <ul>
                              @foreach ($category->documents as $document)
                                 <li><a class="text-decoration-none" href="{{ route('document.preview', $document->slug) }}">{{ $document->name }}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </li>
                  @endforeach
               </ol>

               <div class="d-flex justify-content-center mt-3">
                  {{ $categories->links() }}
               </div>

            </div>
         </div>
      </div>
   </section>
@endsection
