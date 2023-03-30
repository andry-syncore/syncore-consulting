<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PendampinganShrm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PendampinganShrmController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.pendampingan-shrm.index', [
         'title' => 'Pendampingan SHRM',
         'pendampingans' => PendampinganShrm::paginate(5),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.pendampingan-shrm.create', [
         'title' => 'Tambah Pendampingan SHRM'
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
         'name' => 'required|unique:pendampingan_shrms',
         'background' => 'required',
         'objective' => 'required',
         'scope' => 'required',
         'methodology' => 'required|mimes:jpg,png,jpeg',
         'result' => 'required',
         'execution_time' => 'required|mimes:jpg,png,jpeg',
      ];

      $messages = [
         'required' => ':attribute wajib diisi.',
         'unique' => ':attribute sudah digunakan di database.',
         'mimes' => ':attribute wajib berupa format :values'
      ];

      $aliases = [
         'name' => 'Nama dokumen',
         'background' => 'Latar belakang',
         'objective' => 'Tujuan',
         'scope' => 'Ruang lingkup',
         'methodology' => 'Metodologi',
         'result' => 'hasil pendampingan',
         'execution_time' => 'Waktu pelaksanaan',
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         DB::transaction(function () use ($validate, $request) {
            $validate['slug'] = Str::slug($request->name);
            $validate['methodology'] = $request->file('methodology')->store('img/pendampingan-shrm');
            $validate['execution_time'] = $request->file('execution_time')->store('img/pendampingan-shrm');

            PendampinganShrm::create($validate);
         });

         return redirect()->route('pendampingan-shrm.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\PendampinganShrm  $pendampinganShrm
    * @return \Illuminate\Http\Response
    */
   public function edit(PendampinganShrm $pendampinganShrm)
   {
      return view('dashboard.pendampingan-shrm.edit', [
         'title' => 'Edit Pendampingan SHRM',
         'pendampingan' => $pendampinganShrm
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\PendampinganShrm  $pendampinganShrm
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, PendampinganShrm $pendampinganShrm)
   {
      $rules = [
         'name' => "required|unique:pendampingan_shrms,name,$pendampinganShrm->id",
         'background' => 'required',
         'objective' => 'required',
         'scope' => 'required',
         'methodology' => 'mimes:jpg,png,jpeg',
         'result' => 'required',
         'execution_time' => 'mimes:jpg,png,jpeg',
      ];

      $messages = [
         'required' => ':attribute wajib diisi.',
         'unique' => ':attribute sudah digunakan di database.',
         'mimes' => ':attribute wajib berupa format :values'
      ];

      $aliases = [
         'name' => 'Nama dokumen',
         'background' => 'Latar belakang',
         'objective' => 'Tujuan',
         'scope' => 'Ruang lingkup',
         'methodology' => 'Metodologi',
         'result' => 'hasil pendampingan',
         'execution_time' => 'Waktu pelaksanaan',
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         DB::transaction(function () use ($validate, $request, $pendampinganShrm) {
            $validate['slug'] = Str::slug($request->name);

            if ($request->file('methodology')) {
               Storage::delete($pendampinganShrm->methodology);
               $validate['methodology'] = $request->file('methodology')->store('img/pendampingan-shrm');
            }

            if ($request->file('execution_time')) {
               Storage::delete($pendampinganShrm->execution_time);
               $validate['execution_time'] = $request->file('execution_time')->store('img/pendampingan-shrm');
            }


            $pendampinganShrm->update($validate);
         });

         return redirect()->route('pendampingan-shrm.index')->with('success', 'Data berhasil diubah');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\PendampinganShrm  $pendampinganShrm
    * @return \Illuminate\Http\Response
    */
   public function destroy(PendampinganShrm $pendampinganShrm)
   {
      try {
         $pendampinganShrm->delete();
         Storage::delete($pendampinganShrm->methodology);
         Storage::delete($pendampinganShrm->execution_time);
         return redirect()->route('pendampingan-shrm.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
