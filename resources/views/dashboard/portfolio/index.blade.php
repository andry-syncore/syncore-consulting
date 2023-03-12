@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show text-center">
            {{ session()->get('success') }}
            <button class="close" data-dismiss="alert" type="button" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      @endif

      <div class="d-flex justify-content-start mb-3">
         <a class="btn btn-orange" href="{{ route('portfolios.create') }}">Tambah Portfolio</a>
      </div>

      <div class="table-responsive">
         <table class="table-borderless table-striped table">
            <thead class="bg-orange text-light">
               <tr>
                  <th>#</th>
                  <th>Nama Project</th>
                  <th>Lokasi</th>
                  <th>Klien</th>
                  <th>Tahun</th>
                  <th>Latar Belakanag</th>
                  <th style="widows: 1%; white-space: nowrap">Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($portfolios as $portfolio)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ Str::limit($portfolio->title, 50, '...') }}</td>
                     <td>{{ $portfolio->location }}</td>
                     <td>{{ $portfolio->client }}</td>
                     <td>{{ $portfolio->year }}</td>
                     <td>{{ Str::limit($portfolio->background, 150, '...') }}</td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>

      <div class="d-flex justify-content-center">
         {{ $portfolios->links() }}
      </div>
   </div>
@endsection
