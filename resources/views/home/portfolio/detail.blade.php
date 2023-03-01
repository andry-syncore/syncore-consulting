@extends('home.layouts.app')
@section('content')
   @push('style')
      <style>
         /* custom style here */
      </style>
   @endpush

   <section class="overflow-hidden" id="detail-portfolio">
      <div class="row">
         <div class="col-12">
            <div class="position-relative overflow-hidden">
               <img class="img-fluid" src="{{ asset('storage/img/portfolio/detail-image-portfolio-1.png') }}" alt="Gambar portfolio">
               <div class="container">
                  <div class="position-absolute text-header-portfolio">
                     <div class="row">
                        <div class="col-md-7 col-lg-6">
                           <h3 class="text-orange mb-3">PROYEK</h3>
                           <h4 class="text-white">Kajian Risalah Kebijakan Penguatan Kapasitas Kelembagaan Bumdes dalam kegiatan social ekonomi desa</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="content-detail-portfolio">
      <div class="container py-3">
         <div class="row">
            <div class="col-md-4 mb-md-0 mb-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">KLIEN</h4>
               <p class="text-dark-3 mb-0">TNP2K (Tim Nasional Percepatan Penanggulangan Kemiskinan)</p>
            </div>
            <div class="col-md-4 mb-md-0 border-start mb-2 border-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">LOKASI</h4>
               <p class="text-dark-3 mb-0">Bumdes Tumbuh Maju diseluruh Indonesia</p>
            </div>
            <div class="col-md-4 mb-md-0 border-start mb-2 border-2">
               <h4 class="text-orange fw-500 mb-md-2 mb-0">TAHUN</h4>
               <p class="text-dark-3 mb-0">2020</p>
            </div>
         </div>

         <hr class="text-orange border-3">

         <div class="row">
            <div class="col-md-3 mb-md-0 mb-4">
               <div class="card card-body rounded-3 px-4 py-3 shadow" id="menu-detail-portfolio">
                  <a class="nav-link" href="#latar-belakang">Latar Belakang Proyek</a>
                  <a class="nav-link" href="#permasalahan-klien">Permasalahan Klien</a>
                  <a class="nav-link" href="#solusi">Solusi</a>
                  <a class="nav-link" href="#tahapan-dan-metodologi">Tahapan atau Metodologi</a>
                  <a class="nav-link" href="#hasil">Hasil</a>

                  <a class="btn btn-orange fw-600 mt-3 py-2" href="">Kontak Kami</a>
               </div>
            </div>

            <div class="col-md-9">
               <div class="card card-body">
                  <p class="fw-600 m-0" id="latar-belakang">Latar Belakang Proyek</p>
                  <p class="text-dark-5 small mt-3 mb-0">Pada tahun 2020 penduduk Indonesia mencapai 273,5 juta orang, dengan 119,3 juta orang tinggal di perdesaan (atau 46,62
                     persen). Di Indonesia,
                     jumlah penduduk miskin meningkat menjadi 26,42 juta jiwa pada tahun 2020 akibat pandemi virus corona (covid-19), dengan 57,76 persen atau 15,26 juta jiwa tinggal
                     di pedesaan. Upaya peningkatan kesejahteraan masyarakat melalui kegiatan pemberdayaan ekonomi di pedesaan perlu dilakukan untuk mencegah bertambahnya jumlah
                     penduduk miskin di Indonesia, khususnya di pedesaan.

                     Sebagai pendukung penting bagi pembangunan dan kegiatan sosial yang membutuhkan partisipasi masyarakat, desa memiliki modal sosial masyarakat yang kuat. Namun,
                     keterbatasan modal ekonomi desa berbanding terbalik dengan kondisi tersebut. Proporsi penduduk miskin yang lebih tinggi dibandingkan dengan daerah perkotaan.
                     Namun, kewenangan yang diberikan UU Desa memberikan kesempatan kepada desa untuk memperluas dan meningkatkan kegiatan ekonominya. Desa memiliki pilihan untuk
                     membentuk Badan Usaha Milik Desa (BUM Desa), yang dapat didirikan dengan semangat kekeluargaan dan gotong royong untuk menggunakan seluruh sumber daya ekonomi,
                     alam, dan manusia untuk meningkatkan kesejahteraan masyarakatnya.</p>

                  <div class="rounded-2 mt-4 overflow-hidden">
                     <img class="img-fluid" src="{{ asset('storage/img/portfolio/detail-image-portfolio-1.png') }}" alt="Gambar portfolio">
                  </div>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="permasalahan-klien">Permasalahan Klien</p>
                  <ol class="mt-2">
                     <li class="small text-dark-5 mt-2">TNP2K membutuhkan mitra dalam melakukan kajian mengenai Penyebab Peran BUM Desa belum optimal sebagai “wadah dan inkubator”
                        pengembangan kapasitas kegiatan dan usaha masyarakat di desa.</li>
                     <li class="small text-dark-5 mt-2">TNP2K membutuhkan mitra dalam melakukan kajian mengenai Penyebab BUM Desa belum secara sungguh-sungguh memerankan peran
                        “Keperantaraan Pasar”, yang menghubungkan produk-produk unggulan desa dengan potensi pasar yang ada pada skala supradesa.</li>
                     <li class="small text-dark-5 mt-2">TNP2K membutuhkan mitra dalam melakukan kajian mengenai penyebab lemahnya BUM Desa untuk berperan sebagai lembaga sosial dan
                        lembaga ekonomi yang efektif dalam rangka “memperkuat kapasitas penyelenggaraan pembangunan desa”.</li>
                     <li class="small text-dark-5 mt-2">TNP2K membutuhkan mitra dalam melakukan kajian mengenai Kebijakan Penguatan Kapasitas Kelembagaan Bumdes dalam kegiatan social
                        ekonomi desa dalam mengentaskan kemiskinan di desa.</li>
                  </ol>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="solusi">Solusi</p>
                  <ol class="mt-2">
                     <li class="small text-dark-5 mt-2">Membuat Konsep Kajian.</li>
                     <li class="small text-dark-5 mt-2">Melakukan FGD dengan tim peneliti dan stackholder desa.</li>
                  </ol>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="tahapan-dan-metodologi">Tahapan dan Metodologi</p>

                  <p class="fw-600 mt-3 mb-1">Pra Kajian</p>
                  <p class="small text-dark-5 m-0">Pra kajian merupakan tahapan awal sebelum melakukan proses kajian yang cukup panjang. Tahap ini merupakan tahap persiapan dengan
                     berbagai aktivitas seperti:</p>
                  <ol class="mt-2" type="a">
                     <li class="small text-dark-5 fw-500 mt-2">Assessment</li>
                     <span class="text-dark-5 small">Assess merupakan pengumpulan data dan informasi yang dibutuhkan untuk mengetahui latar belakang, ruang lingkup, tujuan dan hasil
                        yang diharapkan oleh TNP2K.</span>

                     <li class="small text-dark-5 fw-500 mt-2">Treat</li>
                     <span class="text-dark-5 small">Treat merupakan penyusunan konsep kajian yang akan dilakukan oleh tim TNP2K dan syncore consulting. Kajian yang akan dilakukan
                        berupa indepth interview kepada stakeholdes bumdes yang terdiri dari Kepala desa, direktur bumdes, dan ketua BPD.</span>

                     <li class="small text-dark-5 fw-500 mt-2">Kick Off Project</li>
                     <span class="small text-dark-5">Pada kegiatan ini tim kajian yang terdiri dari syncore consulting dan TNP2K mengundang stakeholder bumdes dari 50 desa dengan
                        level rintisan, tumbuh dan maju. Tim peneliti menjelaskan gambaran dan timeline kajian.</span>
                  </ol>

                  <p class="fw-600 mt-3 mb-1">Proses Kajian</p>
                  <p class="small text-dark-5 m-0">Pada proses kajian ini ada 2 aktivitas yang dilaksanakan yaitu :</p>
                  <ol class="mt-2" type="a">
                     <li class="small text-dark-5 fw-500 mt-2">Indepth Interview</li>
                     <span class="text-dark-5 small">Indepth Interview dipimpin langsung oleh tenaga ahli yakni dosen dari perguruan tinggi secara online. Indept interview diikuti
                        oleh stakeholder bumdesdari 50 desa.

                        Garis besar indepth interview ini adalah :

                        Kepala Desa : menggali program-program yang dilakukan untuk mengatasi kemiskinan, pengangguran dan ketimpangan di desa
                        Direktur Bumdes : Program kerja serta omset yang didapatkan oleh bumdes, bagaimana keselaran program kerja dengan kebijakan pemerintah desa dalam mengatasi
                        kemiskinan, pengangguran, dan ketimpangan di desa

                        Ketua BPD : Regulasi yang dibuat oleh BPD apakah sudah sesuai dengan kondisi di desa dan apakah ada regulasi yang mengatur tentang kemiskinan, pengangguran dan
                        ketimpangan di desa</span>

                     <li class="small text-dark-5 fw-500 mt-2">FGD Tim Kajian</li>
                     <span class="text-dark-5 small">Hasil indepth interview dengan stakeholder desa kemudian diolah dan hasilnya didiskusikan Bersama dengan tim kajian
                        lainnya.</span>

                     <li class="small text-dark-5 fw-500 mt-2">Penyusunan Hasil Kajian</li>
                     <span class="small text-dark-5">Hasil kesepakatan dan kesepemahan Bersama, tim kajian Menyusun dokumen Kajian Risalah Kebijakan Penguatan Kapasitas Kelembagaan
                        Bumdes dalam kegiatan social ekonomi desa</span>
                  </ol>

                  <p class="fw-600 mt-3 mb-1">Pasca Kajian</p>
                  <p class="small text-dark-5 m-0">Pada tahap pasca kajian ini merupakan tahap akhir, dimana tim melakukan evaluasi, pemaparan hasil kajian dan rencana tindak lanjut
                  </p>
                  <ol class="mt-2" type="a">
                     <li class="small text-dark-5 fw-500 mt-2">Evaluasi</li>
                     <span class="text-dark-5 small">Kajian ini secara penuh dilakukan secara online dikarena sedang dalam masa pandemic covid-19. Pada tahap evaluasi tim kajian
                        menyebarkan kuesioner kepada tim kajian dan stakeholder bumdes guna perbaikan dimasa mendatang</span>

                     <li class="small text-dark-5 fw-500 mt-2">Cut Off Project dan Rencana Tindak Lanjut</li>
                     <span class="text-dark-5 small">Setelah selesai melaksanakan project, tim TNP2K mengajukan hasil dari kajian Risalah Kebijakan Penguatan Kapasitas Kelembagaan
                        Bumdes dalam kegiatan social ekonomi desa ke Kementerian Koordinator Pembangunan Manusia dan Kebudayaan Republik Indonesia.</span>
                  </ol>
               </div>

               <div class="card card-body mt-4">
                  <p class="fw-600 m-0" id="hasil">Hasil</p>
                  <ol class="mt-2">
                     <li class="small text-dark-5 mt-2">Dari Project kajian Risalah Kebijakan Penguatan Kapasitas Kelembagaan Bumdes dalam kegiatan social ekonomi desa TNP2K
                        mengirimkan hasil kajian ke kementrian Koordinator pembangunan manusia dan kebudayan. Kemenko PMK atas diktum ketiga instruksi presiden no 4 tahun 2022 tentang
                        percepatan penghapusan kemiskinan ekstrem harus menyusun pedoman umum pelaksanaan program percepatan penghapusan kemiskinan ekstrem. Ada 3 pilar kebijakan
                        dalam percepatan ini yaitu :</li>
                     <li class="small text-dark-5 mt-2">Komitment pemerintah dalam mengentaskan kemiskinan ekstrem Keterpaduan program, anggaran, dan sasaran</li>
                     <li class="small text-dark-5 mt-2">Monitoring dan Evaluasi</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="other-portfolio">
      <div class="container py-5">
         <div class="row align-items-center">
            <div class="col-6">
               <h5 class="fw-600">Baca juga Proyek kami lainnya</h5>
            </div>
            <div class="col-6 text-end">
               <a class="text-decoration-none" href="">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>

         <div class="row mt-5">
            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-1.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Policy</div>
                  <h4 class="card-title fw-600">Kepmenko PMK Nomor 32 Tahun 2022 Tentang Pedoman Umum Pelaksanaan Program Percepatan Penghapusan Kemiskinan Ekstrem</h4>
                  <p class="text-dark-5 fw-500 mt-2">Syncore Consulting bekerjasama dengan lembaga TNP2K dan Bumdes.id dalam melakukan riset mewawancari 50 direktur BUM Desa dan 50
                     kepala desa yang tersebar di seluruh Indonesia.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-2.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Inovasi</div>
                  <h4 class="card-title fw-600">Program Desa Brilian 2020 Dan Desa Brilian 2021 Bekerjasama Dengan Pt. Bank Rakyat Indonesia Tbk.</h4>
                  <p class="text-dark-5 fw-500 mt-2">Syncore Consulting bekerjasama dengan bumdes.id dan PT. Bank Rakyat Indonesia Tbk membuat program Desa Brilian di tahun 2020 dan
                     2021.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-4 mb-4">
               <div class="card card-body rounded-3 h-100 border-0 shadow">
                  <div class="rounded-3 overflow-hidden">
                     <img class="img-fluid w-100" src="{{ asset('storage/img/portfolio/image-portfolio-3.png') }}" alt="gambar portfolio" loading="lazy">
                  </div>
                  <div class="alert alert-primary alert-fit-content fw-600 mt-3 border-0 py-2 px-4">Governance</div>
                  <h4 class="card-title fw-600">Program Revitalisasi Kelembagaan Bum Desa Umbara Desa Sanggrahan Dan Bum Desa Kemudo Makmur Desa Kemudo Bekerjasama Dengan Csr PT.
                     Sarihusada Generasi Mahardika</h4>
                  <p class="text-dark-5 fw-500 mt-2">Pada tahun 2020 - 2021 syncore consulting bekerjasama dengan PT. Sarihusada Generasi Mahardika (SGM) dan Bumdes.id. PT. SGM
                     memiliki pabrik yang berada di wilayah Desa Kemudo.</p>

                  <div class="card-footer mb-3 border-0 bg-transparent px-0">
                     <a class="text-orange text-decoration-none fw-600" href="">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="contact-detail-portfolio">
      <div class="container py-5">
         <h5 class="fw-600 text-center">Kembangkan bisnis anda bersama kami</h5>
         <div class="row mt-5">
            <div class="col-md-6 mb-md-0 mb-4">
               <div class="card card-body h-100 border-0 shadow-sm rounded-4 py-5 bg-purple text-light">
                  <div class="text-center">
                     <i class="fa-brands fa-whatsapp fa-5x mb-3"></i>
                     <p class="fw-600 m-0">Kontak Via Whatsapp</p>
                     <p class="fw-400 small">Punya pertanyaan? Langsung chat saja!</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <a class="btn btn-orange fw-500 py-2 px-5" href="">Hubungkan</a>
                  </div>
               </div>
            </div>

            <div class="col-md-6 mb-md-0 mb-4">
               <div class="card card-body h-100 border-0 shadow-sm rounded-4 py-5 bg-orange text-light">
                  <div class="text-center">
                     <i class="fa-solid fa-user-group fa-5x mb-3"></i>
                     <p class="fw-600 m-0">1 on 1 Diskusi Bersama Tim Kami</p>
                     <p class="fw-400 small">Diskusi mendalam bersama dengan tim</p>
                  </div>
                  <div class="d-flex justify-content-center">
                     <a class="btn btn-purple fw-500 py-2 px-5" href="">Bergabung Langsung</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   @push('script')
      <script>
         // custom script here
      </script>
   @endpush
@endsection
