<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\CategoryPortfolioController;
use App\Http\Controllers\Dashboard\DocumentController as DashboardDocumentController;
use App\Http\Controllers\Dashboard\PortfolioController;
use App\Http\Controllers\Dashboard\ProgramPendampinganController;
use App\Http\Controllers\Home\DocumentController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\PortfolioController as HomePortfolioController;
use App\Http\Controllers\Home\ProgramPendampinganController as HomeProgramPendampinganController;
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

Route::get('admin', [LoginController::class, 'index'])->name('admin');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');

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

Route::get('program-pendampingan/{program}', [HomeProgramPendampinganController::class, 'show'])->name('program-pendampingan.show');

Route::middleware(['auth'])->group(function () {
   Route::post('logout', [LoginController::class, 'logout'])->name('logout');

   Route::get('dashboard', function () {
      return view('dashboard.index', ['title' => 'Dashboard']);
   })->name('dashboard');

   Route::resource('portfolios', PortfolioController::class)->except('show');
   Route::resource('category_portfolios', CategoryPortfolioController::class)->except('create', 'show');
   Route::resource('documents', DashboardDocumentController::class)->except('show');
   Route::resource('program-pendampingan', ProgramPendampinganController::class)->except('show');
});