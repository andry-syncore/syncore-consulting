<?php

namespace App\View\Components;

use App\Models\InkubasiBisnis;
use App\Models\PendampinganSaab;
use App\Models\PendampinganShrm;
use App\Models\ProgramPelatihan;
use App\Models\ProgramPendampingan;
use Illuminate\View\Component;

class Navbar extends Component
{
   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct()
   {
      //
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      $pendampingan = ProgramPendampingan::all();
      $pelatihan = ProgramPelatihan::all();
      $saab = PendampinganSaab::all();
      $shrm = PendampinganShrm::all();
      $inkubasi = InkubasiBisnis::all();

      return view('components.navbar', [
         'pendampingans' => $pendampingan,
         'pelatihans' => $pelatihan,
         'keuangan' => $saab,
         'resources' => $shrm,
         'inkubasi' => $inkubasi,
      ]);
   }
}
