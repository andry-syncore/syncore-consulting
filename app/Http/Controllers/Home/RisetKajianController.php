<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\RisetKajian;
use Illuminate\Http\Request;

class RisetKajianController extends Controller
{
   public function show(RisetKajian $riset)
   {
      $riset->agenda = json_decode($riset->agenda);

      return view('home.riset-kajian.detail', [
         'title' => 'Riset dan Kajian Akademis',
         'data' => $riset,
      ]);
   }
}
