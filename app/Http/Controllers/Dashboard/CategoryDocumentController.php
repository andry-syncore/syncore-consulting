<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CategoryDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryDocumentController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.category_document.index', [
         'title' => 'Kategori Dokumen',
         'categories' => CategoryDocument::paginate(10),
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
         'name' => ['required', 'unique:category_documents'],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama kategori',
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);
         CategoryDocument::create($validate);

         return redirect()->back()->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\CategoryDocument  $categoryDocument
    * @return \Illuminate\Http\Response
    */
   public function edit(CategoryDocument $categoryDocument)
   {
      return view('dashboard.category_document.index', [
         'title' => 'Kategori Dokumen',
         'categories' => CategoryDocument::paginate(10),
         'category' => $categoryDocument,
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\CategoryDocument  $categoryDocument
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, CategoryDocument $categoryDocument)
   {
      $validate = $request->validate([
         'name' => ['required', 'unique:category_documents,name,' . $categoryDocument->id],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama dokumen',
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);

         $categoryDocument->update($validate);

         return redirect()->route('category_documents.index')->with('success', 'Data berhasil diubah');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal mengubah data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\CategoryDocument  $categoryDocument
    * @return \Illuminate\Http\Response
    */
   public function destroy(CategoryDocument $categoryDocument)
   {
      try {
         $categoryDocument->delete();
         return redirect()->route('category_documents.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
