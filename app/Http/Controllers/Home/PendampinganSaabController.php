<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\PendampinganSaab;
use Illuminate\Http\Request;

class PendampinganSaabController extends Controller
{
   public function show(PendampinganSaab $pendampingan)
   {
      $pendampingan->feature = json_decode($pendampingan->feature);
      $pendampingan->cost = json_decode($pendampingan->cost);

      return view('home.pendampingan-saab.detail', [
         'title' => 'Pendampingan Keuangan SAAB',
         'program' => $pendampingan
      ]);
   }
}
