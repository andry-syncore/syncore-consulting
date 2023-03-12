<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.portfolio.index', [
         'title' => 'Portfolio',
         'portfolios' => Portfolio::paginate(10),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.portfolio.create', [
         'title' => 'Portfolio',
         'categories' => CategoryPortfolio::all(),
      ]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $rules = [
         'category_portfolio_id' => 'required',
         'title' => 'required|unique:portfolios',
         'client' => 'required',
         'location' => 'required',
         'year' => 'required',
         'background' => 'required',
         'problem' => 'required',
         'solution' => 'required',
         'metodologi' => 'required',
         'result' => 'required',
         'photos' => 'required|mimes:jpg,png',
      ];

      $messages = [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
         'mimes' => ':attribute harus berupa :values'
      ];

      $aliases = [
         'category_portfolio_id' => 'Kategori',
         'title' => 'Nama project',
         'client' => 'Klien',
         'location' => 'Lokasi',
         'year' => 'Tahun',
         'background' => 'Latar belakang',
         'problem' => 'Permasalahan klien',
         'solution' => 'Solusi',
         'metodologi' => 'Tahapan atau metodologi',
         'result' => 'Hasil',
         'photos' => 'Foto dokumentasi'
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         $validate['slug'] = Str::slug($request->title);
         $validate['photos'] = $request->file('photos')->store('img/portfolio');
         Portfolio::create($validate);

         return redirect()->route('portfolios.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Portfolio  $portfolio
    * @return \Illuminate\Http\Response
    */
   public function edit(Portfolio $portfolio)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Portfolio  $portfolio
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Portfolio $portfolio)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Portfolio  $portfolio
    * @return \Illuminate\Http\Response
    */
   public function destroy(Portfolio $portfolio)
   {
      //
   }
}
