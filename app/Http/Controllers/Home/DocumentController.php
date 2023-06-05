<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CategoryDocument;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   public function index(Request $request)
   {
      return view('home.download.index', [
         'title' => 'Download',
         'categories' => CategoryDocument::has('documents')->with(['documents' => function($q) use($request) {
            return $q->where('name', 'LIKE', "%$request->search%");
         }])->paginate(10),
      ]);
   }

   public function download(Document $document)
   {
      try {
         $path = public_path("storage/$document->file_path");
         return response()->download($path);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
      }
   }

   public function preview(Document $document)
   {
      try {
         $path = public_path("storage/$document->file_path");
         return response()->file($path);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
      }
   }
}

