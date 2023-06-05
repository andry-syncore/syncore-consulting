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
         <a class="btn btn-orange" href="{{ route('documents.create') }}">Tambah Dokumen</a>
      </div>
      <div class="table-responsive">
         <table class="table-borderless table-striped table">
            <thead class="bg-orange text-light">
               <tr>
                  <th>#</th>
                  <th>Kategori</th>
                  <th>Nama Dokumen</th>
                  <th>Lokasi Dokumen</th>
                  <th>Tanggal Upload</th>
                  <th style="width: 1%; white-space: nowrap;">Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($documents as $document)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $document->category->name }}</td>
                     <td>{{ $document->name }}</td>
                     <td>{{ $document->file_path }}</td>
                     <td>{{ \Carbon\Carbon::parse($document->created_at)->isoFormat('DD MMMM YYYY') }}</td>
                     <td>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-primary btn-sm mr-2" href="{{ route('documents.edit', $document) }}">Edit</a>
                           <button class="btn btn-danger btn-sm btn-delete" data-url="{{ route('documents.destroy', $document) }}" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                        </div>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>

         <div class="d-flex justify-content-center">
            {{ $documents->links() }}
         </div>
      </div>
   </div>
@endsection
