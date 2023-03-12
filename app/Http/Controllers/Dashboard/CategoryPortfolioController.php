<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CategoryPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryPortfolioController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.category.index', [
         'title' => 'Kategori Portfolio',
         'categories' => CategoryPortfolio::paginate(10),
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
      $validate = $request->validate([
         'name' => ['required', 'unique:category_portfolios'],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama kategori',
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);
         CategoryPortfolio::create($validate);

         return redirect()->back()->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\CategoryPortfolio  $categoryPortfolio
    * @return \Illuminate\Http\Response
    */
   public function edit(CategoryPortfolio $categoryPortfolio)
   {
      return view('dashboard.category.index', [
         'title' => 'Kategori Portfolio',
         'categories' => CategoryPortfolio::paginate(10),
         'category' => $categoryPortfolio,
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\CategoryPortfolio  $categoryPortfolio
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, CategoryPortfolio $categoryPortfolio)
   {
      $validate = $request->validate([
         'name' => ['required', 'unique:category_portfolios,name,' . $categoryPortfolio->id],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama dokumen',
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);

         $categoryPortfolio->update($validate);

         return redirect()->route('category_portfolios.index')->with('success', 'Data berhasil diubah');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal mengubah data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\CategoryPortfolio  $categoryPortfolio
    * @return \Illuminate\Http\Response
    */
   public function destroy(CategoryPortfolio $categoryPortfolio)
   {
      try {
         $categoryPortfolio->delete();
         return redirect()->route('category_portfolios.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
