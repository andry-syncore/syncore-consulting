<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route beranda
Route::get('/', function () {
   return view('home.index', [
      'title' => 'Beranda'
   ]);
})->name('home');

Route::get('about', function() {
   return view('home.about.index', [
      'title' => 'Tentang Kami'
   ]);
})->name('about');

Route::get('faq', function() {
   return view('home.faq.index', [
      'title' => 'Tentang Kami'
   ]);
})->name('faq');

Route::get('portfolio', function() {
   return view('home.portfolio.index', [
      'title' => 'Portfolio'
   ]);
})->name('portfolio');

Route::get('media', function() {
   return view('home.media.index', [
      'title' => 'Media'
   ]);
})->name('media');