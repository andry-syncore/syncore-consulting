<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\InkubasiBisnis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InkubasiBisnisController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.inkubasi-bisnis.index', [
         'title' => 'Inkubasi Bisnis',
         'data' => InkubasiBisnis::paginate(5),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.inkubasi-bisnis.create', [
         'title' => 'Tambah Data Inkubasi Bisnis',
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
         'name' => 'required|unique:inkubasi_bisnis',
         'objective' => 'required',
         'scope' => 'required',
         'background' => 'required',
         'result' => 'required',
         'methodology' => 'required',
         'execution_time' => 'required',
      ];

      $messages = [
         'required' => ':attribute wajib diisi.',
         'unique' => ':attribute sudah digunakan di database.'
      ];

      $alisases = [
         'name' => 'Nama dokumen',
         'objective' => 'Tujuan',
         'scope' => 'Ruang lingkup',
         'background' => 'Latar belakang',
         'result' => 'Hasil inkubasi',
         'methodology' => 'Metodologi',
         'execution_time' => 'Waktu pelaksanaan',
      ];

      $validate = $request->validate($rules, $messages, $alisases);

      try {
         DB::transaction(function () use ($validate, $request) {
            $validate['slug'] = Str::slug($request->name);
            $validate['methodology'] = $request->file('methodology')->store('img/inkubasi-bisnis');
            $validate['execution_time'] = $request->file('execution_time')->store('img/inkubasi-bisnis');

            InkubasiBisnis::create($validate);
         });

         return redirect()->route('inkubasi-bisnis.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\InkubasiBisnis  $inkubasiBisnis
    * @return \Illuminate\Http\Response
    */
   public function edit(InkubasiBisnis $inkubasiBisnis)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\InkubasiBisnis  $inkubasiBisnis
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, InkubasiBisnis $inkubasiBisnis)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\InkubasiBisnis  $inkubasiBisnis
    * @return \Illuminate\Http\Response
    */
   public function destroy(InkubasiBisnis $inkubasiBisnis)
   {
      //
   }
}
