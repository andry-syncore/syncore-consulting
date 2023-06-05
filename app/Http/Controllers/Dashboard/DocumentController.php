<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CategoryDocument;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.document.index', [
         'title' => 'Dokumen Consulting',
         'documents' => Document::with('category')->paginate(10)
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.document.create', [
         'title' => 'Tambah Dokumen',
         'categories' => CategoryDocument::all(),
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
         'name' => ['required', 'unique:documents'],
         'file_path' => ['required'],
         'category_document_id' => ['required'],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama dokumen',
         'file_path' => 'File dokumen',
         'category_document_id' => 'Kategori Dokumen'
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);

         $file = $request->file('file_path');
         $file_name = $validate['slug'];
         $file_ext = $file->extension();

         $validate['file_path'] = $file->storeAs('document', "$file_name.$file_ext");
         Document::create($validate);

         return redirect()->route('documents.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Document $document)
   {
      return view('dashboard.document.edit', [
         'title' => 'Edit Dokumen',
         'categories' => CategoryDocument::all(),
         'document' => $document
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Document $document)
   {
      $validate = $request->validate([
         'name' => ['required', 'unique:documents,name,' . $document->id],
         'category_document_id' => ['required'],
      ], [
         'required' => ':attribute wajib diisi',
         'unique' => ':attribute sudah digunakan di database',
      ], [
         'name' => 'Nama dokumen',
         'category_document_id' => 'Kategori Dokumen',
      ]);

      try {
         $validate['slug'] = Str::slug($request->name);

         if ($request->file('file_path')) {
            Storage::delete($document->file_path);

            $file = $request->file('file_path');
            $file_name = $validate['slug'];
            $file_ext = $file->extension();

            $validate['file_path'] = $file->storeAs('document', "$file_name.$file_ext");
         }

         $document->update($validate);

         return redirect()->route('documents.index')->with('success', 'Data berhasil diubah');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal mengubah data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Document $document)
   {
      try {
         $document->delete();
         Storage::delete($document->file_path);
         return redirect()->route('documents.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
