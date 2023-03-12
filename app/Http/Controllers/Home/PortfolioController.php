<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
   public function index()
   {
      return view('home.portfolio.index', [
         'title' => 'Portfolio',
         'portfolios' => Portfolio::with('category')->paginate(10),
      ]);
   }

   public function detail(Portfolio $portfolio)
   {
      return view('home.portfolio.detail', [
         'title' => 'Detail Portfolio',
         'portfolio' => $portfolio->load('category'),
      ]);
   }
}
