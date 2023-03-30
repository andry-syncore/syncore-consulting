<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PendampinganSaab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PendampinganSaabController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('dashboard.pendampingan-saab.index', [
         'title' => 'Pendampingan Keuangan SAAB',
         'pendampingans' => PendampinganSaab::paginate(5),
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('dashboard.pendampingan-saab.create', [
         'title' => 'Tambah Pendampingan Keuangan SAAB',
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
      if ($request->ajax()) {
         $rules = [
            'name' => 'required|unique:pendampingan_saabs',
            'objective' => 'required',
            'benefit' => 'required',
            'output' => 'required',
            'feature.*' => 'required',
            'feature_content.*' => 'required',
            'work_program' => 'required',
            'cost_first_year' => 'required',
            'cost_next_year' => 'required',
            'facilities' => 'required',
            'demo' => 'required',
         ];

         $messages = [
            'required' => ':attribute pendampingan wajib diisi.',
            'unique' => ':attribute pendampingan sudah digunakan di database.'
         ];

         $alisases = [
            'name' => 'Nama',
            'objective' => 'Tujuan',
            'benefit' => 'Manfaat',
            'output' => 'Output',
            'feature.*' => 'Nama fitur',
            'feature_content.*' => 'Detail fitur',
            'work_program' => 'Program kerja',
            'cost_first_year' => 'Biaya aktivasi dan hosting',
            'cost_next_year' => 'Biaya hosting tahun selanjutnya',
            'facilities' => 'Fasilitas',
            'demo' => 'Demo',
         ];

         $validator = Validator::make($request->all(), $rules, $messages, $alisases);

         if ($validator->fails()) {
            return ['code' => 422, 'validation' => $validator->getMessageBag()];
         }

         try {
            $validated = $validator->validated();

            $features = [];
            foreach($request->feature as $i => $feat) {
               $content = Str::replace(['<div>', '</div>', '<ul>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $request->feature_content[$i]);

               $features['name'][] = $feat;
               $features['content'][] = $content;
            }

            $costs = [];
            $costs['cost_first_year'] = $validated['cost_first_year'];
            $costs['cost_next_year'] = $validated['cost_next_year'];
            $costs['facilities'] = Str::replace(['<ul>', '<li>'], ['<ol class="mt-2">', '<li class="small text-dark-5 mt-2">'], $validated['facilities']);
            $costs['demo'] = Str::replace(['<div>', '</div>', '<ul>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $validated['demo']);

            $data = [];
            $data['name'] = $validated['name'];
            $data['slug'] = Str::slug($validated['name']);
            $data['objective'] = $validated['objective'];
            $data['benefit'] = $validated['benefit'];
            $data['output'] = $validated['output'];
            $data['work_program'] = $validated['work_program'];
            $data['feature'] = json_encode($features);
            $data['cost'] = json_encode($costs);

            PendampinganSaab::create($data);

            return ['code' => 200, 'message' => 'Data berhasil disimpan.'];
         } catch (\Throwable $th) {
            return ['code' => 500, 'message' => 'Terjadi kesalahaan, silahkan coba lagi.'];
         }
      }
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\PendampinganSaab  $pendampinganSaab
    * @return \Illuminate\Http\Response
    */
   public function edit(PendampinganSaab $pendampinganSaab)
   {
      $pendampinganSaab->feature = json_decode($pendampinganSaab->feature);
      $pendampinganSaab->cost = json_decode($pendampinganSaab->cost);
      return view('dashboard.pendampingan-saab.edit', [
         'title' => 'Pendampingan Keuangan SAAB',
         'pendampingan' => $pendampinganSaab,
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\PendampinganSaab  $pendampinganSaab
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, PendampinganSaab $pendampinganSaab)
   {
      if ($request->ajax()) {
         $rules = [
            'name' => "required|unique:pendampingan_saabs,name,$pendampinganSaab->id",
            'objective' => 'required',
            'benefit' => 'required',
            'output' => 'required',
            'feature.*' => 'required',
            'feature_content.*' => 'required',
            'work_program' => 'required',
            'cost_first_year' => 'required',
            'cost_next_year' => 'required',
            'facilities' => 'required',
            'demo' => 'required',
         ];

         $messages = [
            'required' => ':attribute pendampingan wajib diisi.',
            'unique' => ':attribute pendampingan sudah digunakan di database.'
         ];

         $alisases = [
            'name' => 'Nama',
            'objective' => 'Tujuan',
            'benefit' => 'Manfaat',
            'output' => 'Output',
            'feature.*' => 'Nama fitur',
            'feature_content.*' => 'Detail fitur',
            'work_program' => 'Program kerja',
            'cost_first_year' => 'Biaya aktivasi dan hosting',
            'cost_next_year' => 'Biaya hosting tahun selanjutnya',
            'facilities' => 'Fasilitas',
            'demo' => 'Demo',
         ];

         $validator = Validator::make($request->all(), $rules, $messages, $alisases);

         if ($validator->fails()) {
            return ['code' => 422, 'validation' => $validator->getMessageBag()];
         }

         try {
            $validated = $validator->validated();

            $features = [];
            foreach($request->feature as $i => $feat) {
               $content = Str::replace(['<div>', '</div>', '<ul>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $request->feature_content[$i]);

               $features['name'][] = $feat;
               $features['content'][] = $content;
            }

            $costs = [];
            $costs['cost_first_year'] = $validated['cost_first_year'];
            $costs['cost_next_year'] = $validated['cost_next_year'];
            $costs['facilities'] = Str::replace(['<ul>', '<li>'], ['<ol class="mt-2">', '<li class="small text-dark-5 mt-2">'], $validated['facilities']);
            $costs['demo'] = Str::replace(['<div>', '</div>', '<ul>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $validated['demo']);

            $data = [];
            $data['name'] = $validated['name'];
            $data['slug'] = Str::slug($validated['name']);
            $data['objective'] = $validated['objective'];
            $data['benefit'] = $validated['benefit'];
            $data['output'] = $validated['output'];
            $data['work_program'] = $validated['work_program'];
            $data['feature'] = json_encode($features);
            $data['cost'] = json_encode($costs);

            $pendampinganSaab->update($data);

            return ['code' => 200, 'message' => 'Data berhasil diubah.'];
         } catch (\Throwable $th) {
            return ['code' => 500, 'message' => 'Terjadi kesalahaan, silahkan coba lagi.'];
         }
      }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\PendampinganSaab  $pendampinganSaab
    * @return \Illuminate\Http\Response
    */
   public function destroy(PendampinganSaab $pendampinganSaab)
   {
      try {
         $pendampinganSaab->delete();
         return redirect()->route('pendampingan-saab.index')->with('success', 'Data berhasil dihapus');
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
      }
   }
}
