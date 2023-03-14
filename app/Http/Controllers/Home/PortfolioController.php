<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
   public function index(Request $request)
   {
      return view('home.portfolio.index', [
         'title' => 'Portfolio',
         'portfolios' => Portfolio::with('category')->filter($request->category, $request->search)->paginate(10)->withQueryString(),
         'categories' => CategoryPortfolio::all(),
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
