<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ProgramPelatihan;
use Illuminate\Http\Request;

class ProgramPelatihanController extends Controller
{
   public function show(ProgramPelatihan $program)
   {

      $program->agenda = json_decode($program->agenda);
      $program->cost = json_decode($program->cost);

      $program->agenda->sesi = json_decode($program->agenda->sesi);
      $program->agenda->waktu = json_decode($program->agenda->waktu);
      $program->agenda->materi = json_decode($program->agenda->materi);

      return view('home.program-pelatihan.detail', [
         'title' => 'Program Pelatihan',
         'program' => $program
      ]);
   }
}
