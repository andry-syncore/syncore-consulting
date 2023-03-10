@extends('auth.layouts.app')
@section('content')
   <div class="row justify-content-center">

      <div class="col-12 col-md-7 col-lg-5">

         <div class="card o-hidden my-5 border-0 shadow-lg">
            <div class="card-body">
               <div class="text-center">
                  <img class="img-fluid" src="{{ asset('storage/img/logo-navbar.svg') }}" alt="Logo Syncore">
                  <h4 class="mb-3 text-gray-900">Selamat Datang</h4>
               </div>

               @error('auth')
                  <div class="alert alert-danger text-danger text-center">
                     {{ $message }}
                  </div>
               @enderror

               <form action="{{ route('login') }}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="email">E-mail</label>
                     <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="Masukan alamat email...">
                     @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Masukan password...">
                     @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                  </div>
                  <button class="btn btn-orange px-4" type="submit">Masuk</button>
               </form>
            </div>
         </div>

      </div>

   </div>
@endsection
