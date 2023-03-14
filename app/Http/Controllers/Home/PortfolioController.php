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
      if ($request->ajax()) {
         return $this->getDataPortfolio($request->category);
      }

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

   private function getDataPortfolio($category)
   {
      try {
         $portfolio = Portfolio::whereHas('category', function($q) use($category) {
            $q->where('slug', 'like', "%$category%");
         })->first();

         return [
            'status' => 200, 
            'view' => view('home.portfolio.tab-content-portfolio', [
            'portfolio' => $portfolio,
         ])->render()];

      } catch (\Throwable $th) {
         return ['status' => '500', 'message' => 'Ada kesalahan dalam mengambil data, silahkan coba lagi'];
      }
   }
}
