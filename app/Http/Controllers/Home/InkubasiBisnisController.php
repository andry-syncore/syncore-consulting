<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\InkubasiBisnis;
use Illuminate\Http\Request;

class InkubasiBisnisController extends Controller
{
   public function show(InkubasiBisnis $inkubasi)
   {
      return view('home.inkubasi-bisnis.detail', [
         'title' => 'Inkubasi Bisnis',
         'pendampingan' => $inkubasi
      ]);
   }
}
