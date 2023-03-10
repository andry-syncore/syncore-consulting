<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
   public function index()
   {
      return view('home.download.index', [
         'title' => 'Download',
         'documents' => Document::paginate(15)
      ]);
   }

   public function download(Document $document)
   {
      $path = public_path("storage/document/$document->file_path");
      return response()->download($path);
   }
}
