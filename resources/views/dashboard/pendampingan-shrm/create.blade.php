@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif
      <form class="row" action="{{ route('pendampingan-shrm.store') }}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label" for="name">Nama Program Pendampingan</label>
               <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}"
                  placeholder="contoh: Rekrutmen">
               @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label>Metodologi</label>
               <div class="custom-file">
                  <input class="custom-file-input @error('methodology') is-invalid @enderror" id="methodology" name="methodology" type="file"
                     accept="image/png,image/jpg,image/jpeg">
                  <label class="custom-file-label" for="methodology">Pilih file</label>
                  @error('methodology')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label" for="background">Latar Belakang</label>
               <input id="background" name="background" type="hidden" value="{{ old('background') }}">
               <trix-editor class="@error('background') is-invalid @enderror" input="background"></trix-editor>
               @error('background')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label>Waktu Pelaksanaan</label>
               <div class="custom-file">
                  <input class="custom-file-input @error('execution_time') is-invalid @enderror" id="execution_time" name="execution_time" type="file"
                     accept="image/png,image/jpg,image/jpeg">
                  <label class="custom-file-label" for="execution_time">Pilih file</label>
                  @error('execution_time')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label" for="scope">Ruang Lingkup</label>
               <input id="scope" name="scope" type="hidden" value="{{ old('scope') }}">
               <trix-editor class="@error('scope') is-invalid @enderror" input="scope"></trix-editor>
               @error('scope')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="objective">Tujuan</label>
               <input id="objective" name="objective" type="hidden" value="{{ old('objective') }}">
               <trix-editor class="@error('objective') is-invalid @enderror" input="objective"></trix-editor>
               @error('objective')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="result">Hasil Pendampingan</label>
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
