@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif
      <form class="row" action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="col-md-6">
            <div class="mb-3">
               <label for="category_portfolio_id">Kategory</label>
               <select class="custom-select @error('category_portfolio_id') is-invalid @enderror" id="category_portfolio_id" name="category_portfolio_id">
                  <option value="">:: Pilih Kategori ::</option>
                  @foreach ($categories as $category)
                     <option value="{{ $category->id }}" {{ old('category_portfolio_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                  @endforeach
               </select>
               @error('category_portfolio_id')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>

            <div class="mb-3">
               <label class="form-label" for="title">Nama Project</label>
               <input class="form-control text-capitalize @error('title') is-invalid @enderror" id="title" name="title" type="text" value="{{ old('title') }}"
                  placeholder="Masukan Nama Project">
               @error('title')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
            </div>

            <div class="mb-3">
               <label class="form-label" for="client">Klien</label>
               <input class="form-control text-capitalize @error('client') is-invalid @enderror" id="client" name="client" type="text" value="{{ old('client') }}"
                  placeholder="Masukan Nama Klien">
               @error('client')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="location">Lokasi</label>
               <input class="form-control text-capitalize @error('location') is-invalid @enderror" id="location" name="location" type="text" value="{{ old('location') }}"
                  placeholder="Masukan Lokasi">
               @error('location')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
            </div>

            <div class="mb-3">
               <label class="form-label" for="year">Tahun</label>
               <input class="form-control text-capitalize @error('year') is-invalid @enderror" id="year" name="year" type="text" value="{{ old('year') }}"
                  placeholder="Masukan Tahun">
               @error('year')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
               @enderror
            </div>

            <div class="mb-3">
               <label>Foto Dokumentasi</label>
               <div class="custom-file">
                  <input class="custom-file-input @error('photos') is-invalid @enderror" id="photos" name="photos" type="file">
                  <label class="custom-file-label" for="photos">Pilih file</label>
                  @error('photos')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label for="background">Latar Belakang Project</label>
               <input id="background" name="background" type="hidden" value="{{ old('background') }}">
               <trix-editor class="@error('background') is-invalid @enderror" input="background"></trix-editor>
               @error('background')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label for="problem">Permasalahan Klien</label>
               <input id="problem" name="problem" type="hidden" value="{{ old('problem') }}">
               <trix-editor class="@error('problem') is-invalid @enderror" input="problem"></trix-editor>
               @error('problem')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label for="solution">Solusi</label>
               <input id="solution" name="solution" type="hidden" value="{{ old('solution') }}">
               <trix-editor class="@error('solution') is-invalid @enderror" input="solution"></trix-editor>
               @error('solution')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label for="metodologi">Tahapan atau Metodologi</label>
               <input id="metodologi" name="metodologi" type="hidden" value="{{ old('metodologi') }}">
               <trix-editor class="@error('metodologi') is-invalid @enderror" input="metodologi"></trix-editor>
               @error('metodologi')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label for="result">Hasil</label>
               <input id="result" name="result" type="hidden" value="{{ old('result') }}">
               <trix-editor class="@error('result') is-invalid @enderror" input="result"></trix-editor>
               @error('result')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-12">
            <button class="btn btn-orange px-4" type="submit">Simpan</button>
         </div>
      </form>
   </div>
@endsection
