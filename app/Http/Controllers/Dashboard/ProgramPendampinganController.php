<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProgramPendampingan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProgramPendampinganController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.program-pendampingan.index', [
         'title' => 'Program Pendampingan',
         'programs' => ProgramPendampingan::paginate(5)
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.program-pendampingan.create', [
         'title' => 'Tambah Program Pendampingan'
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
         'name' => 'required|unique:program_pendampingans',
         'background' => 'required',
         'objective' => 'required',
         'scope' => 'required',
         'methodology' => 'required|mimes:jpg,png,jpeg',
         'documents' => 'required',
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
         'documents' => 'Dokumen hasil pendampingan',
         'execution_time' => 'Waktu pelaksanaan',
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         DB::transaction(function () use ($validate, $request) {
            $validate['slug'] = Str::slug($request->name);
            $validate['methodology'] = $request->file('methodology')->store('img/program-pendampingan');
            $validate['execution_time'] = $request->file('execution_time')->store('img/program-pendampingan');

            ProgramPendampingan::create($validate);
         });

         return redirect()->route('program-pendampingan.index')->with('success', 'Data berhasil ditambahkan');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\ProgramPendampingan  $programPendampingan
    * @return \Illuminate\Http\Response
    */
   public function edit(ProgramPendampingan $programPendampingan)
   {
      return view('dashboard.program-pendampingan.edit', [
         'title' => 'Edit Program Pendampingan',
         'program' => $programPendampingan
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\ProgramPendampingan  $programPendampingan
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, ProgramPendampingan $programPendampingan)
   {
      $rules = [
         'name' => "required|unique:program_pendampingans,name,$programPendampingan->id",
         'background' => 'required',
         'objective' => 'required',
         'scope' => 'required',
         'methodology' => 'mimes:jpg,png,jpeg',
         'documents' => 'required',
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
         'documents' => 'Dokumen hasil pendampingan',
         'execution_time' => 'Waktu pelaksanaan',
      ];

      $validate = $request->validate($rules, $messages, $aliases);

      try {
         DB::transaction(function () use ($validate, $request, $programPendampingan) {
            $validate['slug'] = Str::slug($request->name);
            
            if ($request->file('methodology')) {
               Storage::delete($programPendampingan->methodology);
               $validate['methodology'] = $request->file('methodology')->store('img/program-pendampingan');
            }

            if ($request->file('execution_time')) {
               Storage::delete($programPendampingan->execution_time);
               $validate['execution_time'] = $request->file('execution_time')->store('img/program-pendampingan');
            }

            $programPendampingan->update($validate);
         });

         return redirect()->route('program-pendampingan.index')->with('success', 'Data berhasil diubah');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ProgramPendampingan  $programPendampingan
    * @return \Illuminate\Http\Response
    */
   public function destroy(ProgramPendampingan $programPendampingan)
   {
      try {
         $programPendampingan->delete();
         Storage::delete($programPendampingan->methodology);
         Storage::delete($programPendampingan->execution_time);
         return redirect()->route('program-pendampingan.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
