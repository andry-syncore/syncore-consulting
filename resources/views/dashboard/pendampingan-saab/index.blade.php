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
         <a class="btn btn-orange" href="{{ route('pendampingan-saab.create') }}">Tambah Pendampingan</a>
      </div>
      <div class="table-responsive">
         <table class="table-borderless table-striped table">
            <thead class="bg-orange text-light">
               <tr>
                  <th>#</th>
                  <th>Nama Pendampingan</th>
                  <th>Tujuan</th>
                  <th>Manfaat</th>
                  <th>Output</th>
                  <th style="width: 1%; white-space: nowrap;">Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($pendampingans as $pendampingan)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td><p class="m-0 small">{{ $pendampingan->name }}</p></td>
                     <td>{!! $pendampingan->objective !!}</td>
                     <td>{!! $pendampingan->benefit !!}</td>
                     <td>{!! $pendampingan->output !!}</td>
                     <td>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-primary btn-sm mr-2" href="{{ route('pendampingan-saab.edit', $pendampingan) }}">Edit</a>
                           <button class="btn btn-danger btn-sm btn-delete" data-url="{{ route('pendampingan-saab.destroy', $pendampingan) }}" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                        </div>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>

         <div class="d-flex justify-content-center">
            {{ $pendampingans->links() }}
         </div>
      </div>
   </div>
@endsection
