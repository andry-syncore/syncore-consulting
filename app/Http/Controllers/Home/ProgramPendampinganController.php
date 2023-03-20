<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ProgramPendampingan;
use Illuminate\Http\Request;

class ProgramPendampinganController extends Controller
{
   public function show(ProgramPendampingan $program)
   {
      return view('home.program-pendampingan.detail', [
         'title' => 'Program Pendampingan',
         'program' => $program
      ]);
   }
}
