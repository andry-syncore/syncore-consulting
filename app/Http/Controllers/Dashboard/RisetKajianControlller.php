<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\RisetKajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RisetKajianControlller extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.riset-kajian.index', [
         'title' => 'Riset dan Kajian Akademis',
         'data' => RisetKajian::paginate(10),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.riset-kajian.create', [
         'title' => 'Tambah Riset dan Kajian Akademis',
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
         'name' => 'required|unique:riset_kajians',
         'objective' => 'required',
         'cost' => 'required',
         'agenda.*' => 'required',
         'agenda_content.*' => 'required',
      ];

      $messages = [
         'required' => ':attribute wajib diisi.',
         'unique' => ':attribute sudah digunakan di database.'
      ];

      $aliases = [
         'name' => 'Nama',
         'objective' => 'Tujuan',
         'cost' => 'Biaya',
         'agenda.*' => 'Agenda',
         'agenda_content.*' => 'Detail agenda',
      ];

      $validator = Validator::make($request->all(), $rules, $messages, $aliases);

      if ($validator->fails()) {
         return ['code' => 422, 'validation' => $validator->getMessageBag()];
      }

      try {
         $validated = $validator->validated();
         $agenda = [];

         foreach ($request->agenda as $i => $val) {
            $agenda['name'][] = $val;
            $agenda['detail'][] = $request->agenda_content[$i];
         }

         $validated['slug'] = Str::slug($validated['name']);
         $validated['agenda'] = json_encode($agenda);
         
         RisetKajian::create($validated);

         return ['code' => 200, 'message' => 'Data berhasil disimpan.'];
      } catch (\Throwable $th) {
         return ['code' => 500, 'message' => 'Terjadi kesalahaan, silahkan coba lagi.'];
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\RisetKajian  $risetKajian
    * @return \Illuminate\Http\Response
    */
   public function edit(RisetKajian $risetKajian)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\RisetKajian  $risetKajian
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, RisetKajian $risetKajian)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\RisetKajian  $risetKajian
    * @return \Illuminate\Http\Response
    */
   public function destroy(RisetKajian $risetKajian)
   {
      //
   }
}
