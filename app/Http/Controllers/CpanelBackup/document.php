<?php


// DONT DELETE (Download dan Preview method in cpanel)

// HOME
// public function download(Document $document)
//    {
//       try {
//          $path = storage_path('app/public/' . $document->file_path);
//          return response()->download($path);
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
//       }
//    }

//    public function preview(Document $document)
//    {
//       try {
//          $path = storage_path('app/public/' . $document->file_path);
//          return response()->file($path);
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal mengunduh, koneksi error atau file tidak ditemukan. Silahkan hubungi kami apabila masalah berlanjut');
//       }
//    }


// DASHBOARD
// public function store(Request $request)
//    {
//       $validate = $request->validate([
//          'name' => ['required', 'unique:documents'],
//          'file_path' => ['required'],
//       ], [
//          'required' => ':attribute wajib diisi',
//          'unique' => ':attribute sudah digunakan di database',
//       ], [
//          'name' => 'Nama dokumen',
//          'file_path' => 'File dokumen'
//       ]);

//       try {
//          $validate['slug'] = Str::slug($request->name);

//          $file = $request->file('file_path');
//          $file_name = $validate['slug'];
//          $file_ext = $file->extension();

//          $validate['file_path'] = $file->storeAs('document', "$file_name.$file_ext");
//          Document::create($validate);

//          return redirect()->route('documents.index')->with('success', 'Data berhasil ditambahkan');
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal menyimpan data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
//       }
//    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Document $document)
//    {
//       return view('dashboard.document.edit', [
//          'title' => 'Edit Dokumen',
//          'document' => $document
//       ]);
//    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Document $document)
//    {
//       $validate = $request->validate([
//          'name' => ['required', 'unique:documents,name,' . $document->id],
//       ], [
//          'required' => ':attribute wajib diisi',
//          'unique' => ':attribute sudah digunakan di database',
//       ], [
//          'name' => 'Nama dokumen',
//       ]);

//       try {
//          $validate['slug'] = Str::slug($request->name);

//          if ($request->file('file_path')) {
//             $path = "/home/synconsulting/public_html/storage/$document->file_path";
//             unlink($path);

//             $file = $request->file('file_path');
//             $file_name = $validate['slug'];
//             $file_ext = $file->extension();

//             $validate['file_path'] = $file->storeAs('document', "$file_name.$file_ext");
//          }

//          $document->update($validate);

//          return redirect()->route('documents.index')->with('success', 'Data berhasil diubah');
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal mengubah data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
//       }
//    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Document $document)
//    {
//       try {
//          $document->delete();
//          $path = "/home/synconsulting/public_html/storage/$document->file_path";
//          unlink($path);
//          return redirect()->route('documents.index')->with('success', 'Data berhasil dihapus');
//       } catch (\Throwable $th) {
//          return redirect()->back()->with('error', 'Gagal menghapus data, silahkan coba lagi. Apabila masalah berlanjut hubungi Admin');
//       }
//    }