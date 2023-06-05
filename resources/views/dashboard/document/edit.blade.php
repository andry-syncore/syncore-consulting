@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif
      <form class="row" action="{{ route('documents.update', $document) }}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="col-md-4">
            <div class="mb-3">
               <label for="category_document_id" class="form-label">Kategori</label>
               <select class="custom-select @error('category_document_id') is-invalid @enderror" id="category_document_id" name="category_document_id">
                  <option value="">:: Pilih Kategori ::</option>
                  @foreach ($categories as $category)
                     <option value="{{ $category->id }}" {{ old('category_document_id', $document->category_document_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                  @endforeach
               </select>
               @error('category_document_id')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-4">
            <div class="mb-3">
               <label class="form-label" for="name">Nama Dokumen</label>
               <input class="form-control text-capitalize @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name', $document->name) }}"
                  placeholder="Masukan Nama Dokumen">
               @error('name')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
            </div>
         </div>

         <div class="col-md-4">
            <div class="mb-3">
               <label class="form-label">Upload Dokumen</label>
               <div class="custom-file">
                  <input class="custom-file-input @error('file_path') is-invalid @enderror" id="file_path" name="file_path" type="file">
                  <label class="custom-file-label" for="file_path">Choose file</label>
                  @error('file_path')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="col-12">
            <button class="btn btn-orange px-4" type="submit">Simpan</button>
         </div>
      </form>
   </div>
@endsection
