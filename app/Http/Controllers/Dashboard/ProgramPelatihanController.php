<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProgramPelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramPelatihanController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.program-pelatihan.index', [
         'title' => 'Program Pelatihan',
         'programs' => ProgramPelatihan::paginate(5),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.program-pelatihan.create', [
         'title' => 'Tambah Program Pelatihan'
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
      $rules = [
         'name' => 'required|unique:program_pelatihans',
         'objective' => 'required',
         'sesi' => 'required',
         'waktu' => 'required',
         'materi' => 'required',
         'note' => 'nullable',
         'biaya' => 'required',
         'waktu_pelatihan' => 'required',
         'lokasi' => 'required',
         'fasilitas' => 'required',
         'note_pelatihan' => 'nullable',
      ];
      $messages = [
         'required' => ':attribute pelatihan wajib diisi.',
         'unique' => ':attribute pelatihan sudah digunakan di database.'
      ];
      $aliases = [
         'name' => 'Nama',
         'objective' => 'Tujuan',
         'sesi' => 'Sesi',
         'waktu' => 'Waktu sesi',
         'materi' => 'Materi sesi',
         'note' => 'Catatan Agenda',
         'biaya' => 'Biaya',
         'waktu_pelatihan' => 'Waktu',
         'lokasi' => 'Lokasi',
         'fasilitas' => 'Fasilitas',
         'note_pelatihan' => 'Catatan',
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         $sesi = explode(',', $validate['sesi']);
         $sesi = collect($sesi)->map(fn ($val) => trim($val));
         $sesi = json_encode($sesi);

         $waktu = explode(',', $validate['waktu']);
         $waktu = collect($waktu)->map(fn ($val) => trim($val));
         $waktu = json_encode($waktu);

         $materi = explode(',', $validate['materi']);
         $materi = collect($materi)->map(fn ($val) => trim($val));
         $materi = json_encode($materi);

         $validate['fasilitas'] = Str::replace(['<ul>', '<li>', '&nbsp;'], ['<ul class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $validate['fasilitas']);

         $agenda = [
            'sesi' => $sesi,
            'waktu' => $waktu,
            'materi' => $materi,
            'note' => $validate['note']
         ];

         $cost = [
            'biaya' => $validate['biaya'],
            'waktu' => $validate['waktu_pelatihan'],
            'lokasi' => $validate['lokasi'],
            'fasilitas' => $validate['fasilitas'],
            'note' => $validate['note_pelatihan'],
         ];

         $data = [
            'name' => $validate['name'],
            'slug' => Str::slug($validate['name']),
            'objective' => $validate['objective'],
            'agenda' => json_encode($agenda),
            'cost' => json_encode($cost),
         ];

         ProgramPelatihan::create($data);

         return redirect()->route('program-pelatihan.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\ProgramPelatihan  $programPelatihan
    * @return \Illuminate\Http\Response
    */
   public function edit(ProgramPelatihan $programPelatihan)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\ProgramPelatihan  $programPelatihan
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, ProgramPelatihan $programPelatihan)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ProgramPelatihan  $programPelatihan
    * @return \Illuminate\Http\Response
    */
   public function destroy(ProgramPelatihan $programPelatihan)
   {
      try {
         $programPelatihan->delete();
         return redirect()->route('program-pelatihan.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
