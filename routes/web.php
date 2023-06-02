<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\CategoryPortfolioController;
use App\Http\Controllers\Dashboard\DocumentController as DashboardDocumentController;
use App\Http\Controllers\Dashboard\InkubasiBisnisController;
use App\Http\Controllers\Dashboard\PendampinganSaabController;
use App\Http\Controllers\Dashboard\PendampinganShrmController;
use App\Http\Controllers\Dashboard\PortfolioController;
use App\Http\Controllers\Dashboard\ProgramPelatihanController;
use App\Http\Controllers\Dashboard\ProgramPendampinganController;
use App\Http\Controllers\Dashboard\RisetKajianControlller;
use App\Http\Controllers\Home\DocumentController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\InkubasiBisnisController as HomeInkubasiBisnisController;
use App\Http\Controllers\Home\PendampinganSaabController as HomePendampinganSaabController;
use App\Http\Controllers\Home\PendampinganShrmController as HomePendampinganShrmController;
use App\Http\Controllers\Home\PortfolioController as HomePortfolioController;
use App\Http\Controllers\Home\ProgramPelatihanController as HomeProgramPelatihanController;
use App\Http\Controllers\Home\ProgramPendampinganController as HomeProgramPendampinganController;
use App\Http\Controllers\Home\RisetKajianController;
use Illuminate\Support\Facades\Artisan;
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

Route::middleware('guest')->group(function() {
   Route::get('admin', [LoginController::class, 'index'])->name('admin');
   Route::get('login', [LoginController::class, 'index'])->name('login');
   Route::post('login', [LoginController::class, 'authenticate'])->name('login');
});

Route::middleware(['auth'])->group(function () {
   Route::post('logout', [LoginController::class, 'logout'])->name('logout');

   Route::get('dashboard', function () {
      return view('dashboard.index', ['title' => 'Dashboard']);
   })->name('dashboard');

   Route::resource('portfolios', PortfolioController::class)->except('show');
   Route::resource('category_portfolios', CategoryPortfolioController::class)->except('create', 'show');
   Route::resource('documents', DashboardDocumentController::class)->except('show');
   Route::resource('program-pendampingan', ProgramPendampinganController::class)->except('show');
   Route::resource('program-pelatihan', ProgramPelatihanController::class)->except('show');
   Route::resource('pendampingan-saab', PendampinganSaabController::class)->except('show');
   Route::resource('pendampingan-shrm', PendampinganShrmController::class)->except('show');
   Route::resource('inkubasi-bisnis', InkubasiBisnisController::class)->except('show');
   Route::resource('riset-kajian', RisetKajianControlller::class)->except('show');
});

Route::controller(HomeController::class)->group(function() {
   Route::get('/', 'index')->name('home');
   Route::get('about', 'about')->name('about');
   Route::get('faq', 'faq')->name('faq');
   Route::get('media', 'media')->name('media');
   Route::get('mitra', 'mitra')->name('mitra');
});

Route::prefix('portfolio')->controller(HomePortfolioController::class)->group(function() {
   Route::get('/', 'index')->name('portfolio');
   Route::get('/{portfolio}/detail', 'detail')->name('portfolio.detail');
});

Route::get('document', [DocumentController::class, 'index'])->name('document.index');
Route::get('document/{document}', [DocumentController::class, 'download'])->name('document.download');
Route::get('document/preview/{document}', [DocumentController::class, 'preview'])->name('document.preview');

Route::get('program-pendampingan/{program}', [HomeProgramPendampinganController::class, 'show'])->name('program-pendampingan.show');
Route::get('program-pelatihan/{program}', [HomeProgramPelatihanController::class, 'show'])->name('program-pelatihan.show');
Route::get('pendampingan-saab/{pendampingan}', [HomePendampinganSaabController::class, 'show'])->name('pendampingan-saab.show');
Route::get('pendampingan-shrm/{pendampingan}', [HomePendampinganShrmController::class, 'show'])->name('pendampingan-shrm.show');
Route::get('inkubasi-bisnis/{inkubasi}', [HomeInkubasiBisnisController::class, 'show'])->name('inkubasi-bisnis.show');
Route::get('riset-kajian/{riset}', [RisetKajianController::class, 'show'])->name('riset-kajian.show');


// DONT DELETE
// public function download(Document $document)
//    {
//       try {
//          $path = storage_path('app/public/' . $document->file_path);
//          return response()->download($path);
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
//       }
//    }

//    public function preview(Document $document)
//    {
//       try {
//          $path = storage_path('app/public/' . $document->file_path);
//          return response()->file($path);
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
//       }
//    }