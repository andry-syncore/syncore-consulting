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
         <a class="btn btn-orange" href="{{ route('program-pendampingan.create') }}">Tambah Program Pendampingan</a>
      </div>
      <div class="table-responsive">
         <table class="table-borderless table-striped table">
            <thead class="bg-orange text-light">
               <tr>
                  <th>#</th>
                  <th>Nama Dokumen</th>
                  <th>Latar Belakang</th>
                  <th>Tujuan</th>
                  <th>Ruang Lingkup</th>
                  <th>Dokumen Hasil Pendampingan</th>
                  <th style="width: 1%; white-space: nowrap;">Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($programs as $program)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td><p class="m-0 small">{{ $program->name }}</p></td>
                     <td><p class="m-0 small">{{ Str::limit($program->background, 100, '...') }}</p></td>
                     <td>{!! $program->objective !!}</td>
                     <td><p class="m-0 small">{{ Str::limit($program->scope, 100, '...') }}</p></td>
                     <td>{!! $program->documents !!}</td>
                     <td>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-primary btn-sm mr-2" href="{{ route('program-pendampingan.edit', $program) }}">Edit</a>
                           <button class="btn btn-danger btn-sm btn-delete" data-url="{{ route('program-pendampingan.destroy', $program) }}" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                        </div>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>

         <div class="d-flex justify-content-center">
            {{ $programs->links() }}
         </div>
      </div>
   </div>
@endsection
