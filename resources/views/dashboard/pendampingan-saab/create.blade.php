@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif

      <form class="row" id="form-feature" action="{{ route('pendampingan-saab.store') }}" method="post">
         @csrf

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label" for="name">Nama Pendampingan</label>
               <input class="form-control form-saab" id="name" name="name" type="text"
                  placeholder="Contoh: Pendampingan Keuangan Sistem Akuntansi dan Analisa Bisnis (SAAB)">
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label" for="objective">Tujuan</label>
               <input id="objective" name="objective" type="hidden">
               <trix-editor class="form-saab" input="objective"></trix-editor>
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="benefit">Manfaat</label>
               <input id="benefit" name="benefit" type="hidden">
               <trix-editor class="form-saab" input="benefit"></trix-editor>
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="benefit">Output</label>
               <input id="output" name="output" type="hidden">
               <trix-editor class="form-saab" input="output"></trix-editor>
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label">Fitur</label>

               <table class="table-borderless w-100 table-padding-none table" id="feature-table">
                  <tr>
                     <td>
                        <div class="row mb-3">
                           <div class="col-md-6">
                              <input class="form-control form-saab" name="feature[]" type="text" placeholder="Contoh: Dashboard, Setup, Anggaran, dll">
                              <div class="invalid-feedback"></div>
                           </div>
                           <div class="col-md-4">
                              <button class="btn btn-success" id="add-row" type="button">Tambah Fitur</button>
                           </div>
                        </div>

                        <input id="fitur-1" name="feature_content[]" type="hidden">
                        <trix-editor input="fitur-1"></trix-editor>
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
               </table>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label">Program Kerja</label>
               <input id="work_program" name="work_program" type="hidden">
               <trix-editor class="form-saab" input="work_program"></trix-editor>
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label">Biaya Pendampingan</label>
               <table class="table-borderless table-padding-none table">
                  <tr>
                     <td class="w-content">Biaya Aktivasi dan Hosting 1 Tahun</td>
                     <td>
                        <input class="form-control form-saab" name="cost_first_year" type="text">
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
                  <tr>
                     <td class="w-content">Biaya Hosting Tahun Selanjutnya</td>
                     <td>
                        <input class="form-control form-saab" name="cost_next_year" type="text">
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
                  <tr>
                     <td class="w-content">Fasilitas</td>
                     <td>
                        <input id="facilities" name="facilities" type="hidden">
                        <trix-editor class="form-saab" input="facilities"></trix-editor>
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
                  <tr>
                     <td class="w-content">Demo</td>
                     <td>
                        <input id="demo" name="demo" type="hidden">
                        <trix-editor class="form-saab" input="demo"></trix-editor>
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
               </table>
            </div>
         </div>

         <div class="col-12">
            <button class="btn btn-orange px-4" type="submit">Simpan</button>
         </div>
      </form>
   </div>
@endsection
@push('js')
   <script type="module">
      import {notif} from '/assets/js/dashboard/global.js'

      let index = 1
      const featureTable = document.querySelector('#feature-table')

      document.addEventListener('DOMContentLoaded', () => {
         const btnAddRow = document.querySelector('#add-row')
         btnAddRow.addEventListener('click', () => {
            index = index + 1
            addFeatures(featureTable, index)
         })

         const formFeature = document.querySelector('#form-feature')
         formFeature.addEventListener('submit', async function(e) {
            e.preventDefault()

            const formData = new FormData(this)

            try {
               const data = await submitForm(formData)
               notif('success', data.message)
               setTimeout(() => {
                  window.location.href = '/pendampingan-saab'
               }, 1500);
            } catch (error) {
               if (error.code == 422) showInvalidMessage(error.validation)
               else notif('error', error.message)
            }
         })
      })

      document.addEventListener('click', e => {
         const el = e.target

         if (el.classList.contains('delete-row')) {
            let i = el.parentNode.parentNode.parentNode.parentNode.rowIndex;
            featureTable.deleteRow(i);
         }
      })

      const addFeatures = (table, index) => {
         const row = table.insertRow()
         const cell = row.insertCell()

         cell.innerHTML = `
            <div class="row mb-3">
               <div class="col-md-6">
                  <input class="form-control form-saab" name="feature[]" type="text" placeholder="Contoh: Dashboard, Setup, Anggaran, dll">
                  <div class="invalid-feedback"></div>
               </div>
               <div class="col-md-4">
                  <button class="btn btn-outline-dark delete-row" type="button">Hapus Fitur</button>
               </div>
            </div>

            <input id="fitur-${index}" name="feature_content[]" type="hidden">
            <trix-editor class="form-saab" input="fitur-${index}"></trix-editor>
            <div class="invalid-feedback"></div>`
      }

      const submitForm = data => {
         return fetch('/pendampingan-saab', {
               headers: {
                  'X-Requested-With': 'XMLHttpRequest',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
               },
               method: 'POST',
               body: data
            })
            .then(res => res.json())
            .then(res => {
               if (res.code != 200) throw res
               return res
            })
      }

      const showInvalidMessage = validation => {
         const inputFeatures = document.querySelectorAll('input[name="feature[]"]')
         const inputFeatureContents = document.querySelectorAll('input[name="feature_content[]"]')
         const input = document.querySelectorAll('.form-saab')

         input.forEach(el => {
            el.classList.remove('is-invalid')
            el.nextElementSibling.innerHTML = ''

            for (const key in validation) {
               if (el.name == key) {
                  el.classList.add('is-invalid')
                  el.nextElementSibling.innerHTML = validation[key]
               }
            }
         })

         inputFeatures.forEach((el, i) => {
            el.classList.remove('is-invalid')
            el.nextElementSibling.innerHTML = ''

            for (const key in validation) {
               if (key == `feature.${i}`) {
                  el.classList.add('is-invalid')
                  el.nextElementSibling.innerHTML = validation[key]
               }
            }
         })

         inputFeatureContents.forEach((el, i) => {
            el.nextElementSibling.nextElementSibling.classList.remove('is-invalid')
            el.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML = ''

            for (const key in validation) {
               if (key == `feature_content.${i}`) {
                  el.nextElementSibling.nextElementSibling.classList.add('is-invalid')
                  el.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML = validation[key]
               }
            }
         })
      }
   </script>
@endpush
