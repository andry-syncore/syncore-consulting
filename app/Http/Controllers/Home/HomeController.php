<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
   public function index()
   {
      $response = Http::get('https://blog.syncoreconsulting.com/wp-json/wp/v2/posts', [
         'per_page' => 6
      ]);
      $articles = json_decode($response, true);

      return view('home.index', [
         'title' => 'Beranda',
         'categories' => CategoryPortfolio::all(),
      ])->with([
         'articles' => $articles,
      ]);
   }

   public function about()
   {
      return view('home.about.index', [
         'title' => 'Tentang Kami'
      ]);
   }

   public function faq()
   {
      return view('home.faq.index', [
         'title' => 'Tentang Kami'
      ]);
   }

   public function media()
   {
      return view('home.media.index', [
         'title' => 'Media'
      ]);
   }

   public function mitra()
   {
      return view('home.mitra.index', [
         'title' => 'Mitra'
      ]);
   }
}
