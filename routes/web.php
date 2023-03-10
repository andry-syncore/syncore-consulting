<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\CategoryPortfolioController;
use App\Http\Controllers\Dashboard\PortfolioController;
use App\Http\Controllers\Home\DocumentController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('admin', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function () {
   Route::post('logout', [LoginController::class, 'logout'])->name('logout');

   Route::get('dashboard', function () {
      return view('dashboard.index', ['title' => 'Dashboard']);
   })->name('dashboard');

   Route::resource('portfolios', PortfolioController::class);
   Route::resource('categories', CategoryPortfolioController::class);
});

// route beranda
Route::get('/', function () {
   $response = Http::get('https://blog.syncoreconsulting.com/wp-json/wp/v2/posts', [
      'per_page' => 6
   ]);
   $articles = json_decode($response, true);
   return view('home.index', [
      'title' => 'Beranda'
   ])->with([
      'articles' => $articles,
   ]);
})->name('home');

Route::get('about', function () {
   return view('home.about.index', [
      'title' => 'Tentang Kami'
   ]);
})->name('about');

Route::get('faq', function () {
   return view('home.faq.index', [
      'title' => 'Tentang Kami'
   ]);
})->name('faq');

Route::get('portfolio', function () {
   return view('home.portfolio.index', [
      'title' => 'Portfolio'
   ]);
})->name('portfolio');

Route::get('portfolio/{portfolio}', function () {
   return view('home.portfolio.detail', [
      'title' => 'Detail Portfolio'
   ]);
})->name('portfolio.show');

Route::get('media', function () {
   return view('home.media.index', [
      'title' => 'Media'
   ]);
})->name('media');

Route::get('mitra', function () {
   return view('home.mitra.index', [
      'title' => 'Mitra'
   ]);
})->name('mitra');

Route::get('document', [DocumentController::class, 'index'])->name('document.index');
Route::get('document/{document}', [DocumentController::class, 'download'])->name('document.download');
