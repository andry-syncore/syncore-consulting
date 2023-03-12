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

      <form class="row align-items-end" action="{{ isset($category) ? route('category_portfolios.update', $category) : route('category_portfolios.store') }}" method="post">
         @if (isset($category))
            @method('PUT')
         @endif
         <div class="col-md-4 mb-2">
            <h5>{{ isset($category) ? 'Edit' : 'Tambah' }} Kategori</h5>
            @csrf
            <input class="form-control text-capitalize @error('name') is-invalid @enderror" id="name" name="name" type="text"
               value="{{ isset($category) ? $category->name : '' }}" placeholder="Masukan nama kategori">
            @error('name')
               <div class="invalid-feedback">{{ $message }}</div>
            @enderror
         </div>
         <div class="col-md-3 mb-2">
            <button class="btn btn-orange px-4" type="submit">Simpan</button>
            @if (isset($category))
               <a class="btn btn-outline-secondary px-4" href="{{ route('category_portfolios.index') }}">Batal</a>
            @endif
         </div>
      </form>

      <div class="table-responsive">
         <table class="table-borderless table-striped table">
            <thead class="bg-orange text-light">
               <tr>
                  <th>#</th>
                  <th>Nama Kategori</th>
                  <th style="width: 1%; white-space: nowrap;">Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($categories as $category)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $category->name }}</td>
                     <td>
                        <div class="d-flex justify-content-between">
                           <a class="btn btn-primary btn-sm mr-2" href="{{ route('category_portfolios.edit', $category) }}">Edit</a>
                           <button class="btn btn-danger btn-sm btn-delete" data-url="{{ route('category_portfolios.destroy', $category) }}" data-toggle="modal"
                              data-target="#deleteModal">Hapus</button>
                        </div>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>

         <div class="d-flex justify-content-center">
            {{ $categories->links() }}
         </div>
      </div>
   </div>
@endsection
