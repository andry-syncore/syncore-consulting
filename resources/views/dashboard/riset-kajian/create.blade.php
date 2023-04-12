@extends('dashboard.layouts.app')
@section('content')
   <div class="card card-body border-0">
      @if (session()->has('error'))
         <div class="alert alert-danger text-center">
            {{ session()->get('error') }}
         </div>
      @endif
      <form class="row" action="{{ route('riset-kajian.store') }}" method="post" id="form-riset">
         @csrf

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="name">Nama Dokumen</label>
               <input class="form-control form-riset" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="contoh: Riset Kajian Policy">
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="mb-3">
               <label class="form-label" for="cost">Biaya</label>
               <input class="form-control form-riset" id="cost" name="cost" type="text" value="{{ old('cost') }}" placeholder="contoh: Rp 3.000.000,00 Per Instansi">
               <div class="invalid-feedback"></div>
            </div>
         </div>

         <div class="col-12">
            <div class="mb-3">
               <label class="form-label mb-0">Agenda</label>

               <table class="table-borderless w-100 table-padding-none table" id="agenda-table">
                  <tr>
                     <td>
                        <div class="row mb-3">
                           <div class="col-md-6">
                              <input class="form-control form-riset form-saab" name="agenda[]" type="text" placeholder="Masukan nama agenda">
                              <div class="invalid-feedback"></div>
                           </div>
                           <div class="col-md-4">
                              <button class="btn btn-success" id="add-row" type="button">Tambah Agenda</button>
                           </div>
                        </div>

                        <textarea name="agenda_content[]" cols="3" class="form-control form-riset"></textarea>
                        <div class="invalid-feedback"></div>
                     </td>
                  </tr>
               </table>

            </div>
         </div>

         <div class="col-md-12">
            <div class="mb-3">
               <label class="form-label" for="objective">Tujuan</label>
               <input id="objective" name="objective" type="hidden" value="{{ old('objective') }}">
               <trix-editor class="form-riset" input="objective"></trix-editor>
               <div class="invalid-feedback"></div>
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
      const agendaTable = document.querySelector('#agenda-table')

      document.addEventListener('DOMContentLoaded', () => {
         const btnAddRow = document.querySelector('#add-row')
         btnAddRow.addEventListener('click', () => {
            index = index + 1
            addFeatures(agendaTable, index)
         })

         const formRiset = document.querySelector('#form-riset')
         formRiset.addEventListener('submit', async function(e) {
            e.preventDefault()

            const formData = new FormData(this)

            try {
               const data = await submitForm(formData)
               notif('success', data.message)
               setTimeout(() => {
                  window.location.href = '/riset-kajian'
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
                  <input class="form-control form-riset" name="agenda[]" type="text" placeholder="Masukan nama agenda">
                  <div class="invalid-feedback"></div>
               </div>
               <div class="col-md-4">
                  <button class="btn btn-outline-dark delete-row" type="button">Hapus agenda</button>
               </div>
            </div>

            <textarea name="agenda_content[]" cols="3" class="form-control form-riset"></textarea>
            <div class="invalid-feedback"></div>`
      }

      const submitForm = data => {
         return fetch('/riset-kajian', {
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
         const inputAgenda = document.querySelectorAll('input[name="agenda[]"]')
         const inputAgendaContent = document.querySelectorAll('textarea[name="agenda_content[]"]')
         const input = document.querySelectorAll('.form-riset')

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

         inputAgenda.forEach((el, i) => {
            el.classList.remove('is-invalid')
            el.nextElementSibling.innerHTML = ''

            for (const key in validation) {
               if (key == `agenda.${i}`) {
                  el.classList.add('is-invalid')
                  el.nextElementSibling.innerHTML = validation[key]
               }
            }
         })

         inputAgendaContent.forEach((el, i) => {
            el.classList.remove('is-invalid')
            el.nextElementSibling.innerHTML = ''

            for (const key in validation) {
               if (key == `agenda_content.${i}`) {
                  el.classList.add('is-invalid')
                  el.nextElementSibling.innerHTML = validation[key]
               }
            }
         })
      }
   </script>
@endpush