@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">

      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif

      <form class="row" id="form-pelatihan" action="{{ route('program-pelatihan.update', $program) }}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="col-md-12">
            <div class="mb-3">
               <label class="form-label" for="name">Nama Program Pelatihan</label>
               <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="contoh: Pelatihan e-SPI" value="{{ old('name', $program->name) }}">
               @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>

            <div class="mb-3">
               <label class="form-label" for="objective">Tujuan</label>
               <input id="objective" name="objective" type="hidden" value="{{ old('objective', $program->objective) }}">
               <trix-editor class="@error('objective') is-invalid @enderror" input="objective"></trix-editor>
               @error('objective')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>

            <div class="mb-3">
               <label class="form-label">Agenda <span class="text-danger">*(Pisahkan dengan 'enter' jika lebih dari satu)</span></label>

               <div class="mb-3">
                  <label class="form-label small">Sesi</label>
                  <textarea class="form-control @error('sesi') is-invalid @enderror" name="sesi" rows="5">{{ old('sesi', $program->agenda->sesi) }}</textarea>
                  @error('sesi')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>

               <div class="mb-3">
                  <label class="small form-label">Waktu</label>
                  <textarea class="form-control @error('waktu') is-invalid @enderror" name="waktu" rows="5">{{ old('waktu', $program->agenda->waktu) }}</textarea>
                  @error('waktu')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>

               <div class="mb-3">
                  <label class="form-label small">Materi</label>
                  <textarea class="form-control @error('materi') is-invalid @enderror" name="materi" rows="5">{{ old('materi', $program->agenda->materi) }}</textarea>
                  @error('materi')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label" for="note">Catatan</label>
               <input class="form-control" name="note" type="text" placeholder="Contoh: Pelatihan berjalan selama 2 hari" value="{{ old('note', $program->agenda->note) }}">
            </div>

            <div class="mb-3">
               <label class="form-label">Biaya Pelatihan</label>
               <div class="row align-items-end">
                  <div class="col-md-4">
                     <label class="form-label small">Biaya</label>
                     <input class="form-control @error('biaya') is-invalid @enderror" name="biaya" type="text" placeholder="Contoh: Rp. 3.000.000" value="{{ old('biaya', $program->cost->biaya) }}">
                     @error('biaya')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="col-md-4">
                     <label class="small form-label">Waktu</label>
                     <input class="form-control @error('waktu_pelatihan') is-invalid @enderror" name="waktu_pelatihan" type="text"
                        placeholder="Contoh: 2 Hari (Pukul 09.00 - 10.30)" value="{{ old('waktu_pelatihan', $program->cost->waktu) }}">
                     @error('waktu_pelatihan')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="col-md-4">
                     <label class="form-label small">Lokasi</label>
                     <input class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" type="text" placeholder="Masukan lokasi" value="{{ old('lokasi', $program->cost->lokasi) }}">
                     @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
               </div>

               <div class="my-3">
                  <label class="form-label" for="fasilitas">Fasilitas</label>
                  <input id="fasilitas" name="fasilitas" type="hidden" value="{{ old('fasilitas', $program->cost->fasilitas) }}">
                  <trix-editor class="@error('fasilitas') is-invalid @enderror" input="fasilitas"></trix-editor>
                  @error('fasilitas')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>

               <label class="form-label" for="note_pelatihan">Catatan</label>
               <input class="form-control" id="note_pelatihan" name="note_pelatihan" type="text"
                  placeholder="Contoh: Biaya diatas diluar biaya penginapan, Minimal peserta 10 Orang" value="{{ old('note_pelatihan', $program->cost->note) }}">
            </div>

         </div>

         <div class="col-md-12">
            <button class="btn btn-orange px-4" type="submit">Simpan</button>
         </div>
      </form>
   </div>
@endsection
