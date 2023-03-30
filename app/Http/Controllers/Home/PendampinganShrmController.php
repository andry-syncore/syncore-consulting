<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\PendampinganShrm;
use Illuminate\Http\Request;

class PendampinganShrmController extends Controller
{
   public function show(PendampinganShrm $pendampingan)
   {
      return view('home.pendampingan-shrm.detail', [
         'title' => 'Pendampingan SHRM',
         'pendampingan' => $pendampingan
      ]);
   }
}
