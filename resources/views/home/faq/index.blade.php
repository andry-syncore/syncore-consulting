@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */

      </style>
   @endpush

   <!-- section faq -->
   <section id="faq" class="pt-3 pb-5">
      <div class="background-faq-about">
         <div class="container">
            <div class="row py-5">
               <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
                  <div class="text-md-start text-center">
                     <h1 class="fw-600 text-orange">Frequently Asked Questions (FAQ)</h1>
                     <p>Berikut adalah beberapa jenis pertanyaan dasar untuk anda. Untuk lebih informasi silahkan hubungi kami.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-7">
                  <div class="accordion mb-3">
                     <div class="accordion-item shadow border-0" id="accordionFaq-1">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1">
                              Apa itu Syncore Consulting?
                           </button>
                        </h2>
                        <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionFaq-1">
                           <div class="accordion-body text-dark-5y">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to
                              style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                              custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                              the transition does limit overflow.
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="accordion mb-3">
                     <div class="accordion-item shadow border-0" id="accordionFaq-2">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2">
                              Kegaiatan apa saja yang ada di syncore Consulting?
                           </button>
                        </h2>
                        <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq-2">
                           <div class="accordion-body text-dark-5">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to
                              style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                              custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                              the transition does limit overflow.
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="accordion mb-3">
                     <div class="accordion-item shadow border-0" id="accordionFaq-3">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3">
                              Mengapa Syncore Consulting?
                           </button>
                        </h2>
                        <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionFaq-3">
                           <div class="accordion-body text-dark-5">
                              Guru Binar merupakan platform pengembangan karir guru yang pertama di Indonesia dan sertifikat di Guru Binar sudah sesuai dengan kriteria yang ditetapkan pemerintah. Terdapat beragam pengembangan profesional guru yang praktikal yang disesuaikan dengan kebutuhan guru sehingga mampu meningkatkan hard skill dan soft skill.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end faq -->

   @push('script')
      <script>
         // custom script here
      </script>
   @endpush
@endsection
