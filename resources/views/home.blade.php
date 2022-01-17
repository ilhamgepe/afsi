@extends('layouts.main')
@section('title', 'Home')


@section('section-content')
    {{-- hero --}}
    {{-- @DD(request()->is('/')) --}}
    <section class="wrapper bg-soft-primary">
        <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start"
                    data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-2 mb-5">Ikuti Pelatihan Bersertifikat Bersama AFSI.</h1>
                    <p class="lead fs-lg lh-sm mb-7 pe-xl-10">Kolaborasi startup, institusi, akademisi,komunitas, dan pakar
                        praktisi mendorong Teknologi Keuangan</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Kursus Berdasarkan Minat"
                            aria-label="Cari Kursus Berdasarkan Minat" aria-describedby="button-addon2">
                        <button class="btn btn-afsi " type="button" id="button-addon2">Search</button>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="basic-slider owl-carousel dots-over shadow-lg" data-nav="true" data-margin="5">
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/1.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/1.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/2.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/2.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/3.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/3.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/4.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/4.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/5.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/5.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/6.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/6.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/7.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/7.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/8.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/8.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/9.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/9.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/10.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/10.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/11.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/11.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/12.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/12.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/13.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/13.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/14.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/14.jpg') }}" class="rounded" alt="" />
                        </div>
                        <div class="item"><img src="{{ asset('img/kegiatan-afsi/15.jpg') }}"
                                srcset="{{ asset('img/kegiatan-afsi/15.jpg') }}" class="rounded" alt="" />
                        </div>
                    </div>
                    <!-- /.basic-slider -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- AAP --}}
    <section class="wrapper bg-light text-center">
        <div class="container py-14 py-md-17">
            <h3 class="display-4 mb-5">AFSI Academic Partner (AAP)</h3>
            <p class="tw-text-lg">AFSI Academic Partner merupakan program kerja sama pendidikan dan pelatihan antara
                perguruan tinggi dengan
                Asosiasi Fintech Syariah Indonesia (AFSI). Kerja sama ini diperuntukkan bagi instansi akademik yang ingin
                membekali civitas akademikanya dengan kompetensi di bidang fintech syariah.Program ini merupakan bagian dari
                upaya mewujudkan salah satu misi AFSI, yaitu memberikan dukungan kepada institusi akademis dalam dalam
                mempersiapkan sumber daya insani guna mendorong kemajuan fintech syariah di Indonesia dan selaras dengan
                program Merdeka Belajar-Kampus Merdeka Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi RI.</p>
        </div>
        <!-- /.container -->
    </section>
    {{-- program afsi --}}
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-17">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h3 class="display-4 mb-10 px-xl-10">Program AFSI <span class="text-afsi2">Academic Partner</span>
                        (AAP)
                    </h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative mb-14 mb-md-17">
                <div class="shape rounded-circle bg-soft-primary rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: -0.5rem; right: -2.5rem; z-index: 0; transform: translate3d(0px, 87px, 0px) translate3d(0px, 83px, 0px);">
                </div>
                <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1"
                    style="top: -0.5rem; left: -2.5rem; z-index: 0; transform: translate3d(0px, 11px, 0px) translate3d(0px, 15px, 0px);">
                </div>
                <div class="row gx-md-5 gy-5 text-center">
                    <div class="carousel owl-carousel" data-margin="10" data-nav="true" data-loop="true" data-dots="true"
                        data-autoplay="true" data-autoplay-timeout="5000"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                        <div class="card">
                            <img src="{{ asset('img/laptop.png') }}" alt="">
                            <div class="card-body text-start">
                                <a href="#">
                                    <p class="card-title fs-24 text-lg fw-700 text-dark">Workshop Fintech Syariah..</p>
                                </a>
                                <p class="card-subtitle mb-2 text-muted">Card subtitle</p>
                                <p>Pelatihan Workshop Fintech Syariah yang di khususkan untuk dosen demi meningkatkan
                                    pengetahuan dalam bidang syariah</p>
                                <button class="btn btn-afsi mt-3">Ikuti program</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/meeting.png') }}" alt="">
                            <div class="card-body text-start">
                                <a href="#">
                                    <p class="card-title fs-24 text-lg fw-700 text-dark">Workshop Fintech Syariah..</p>
                                </a>
                                <p class="card-subtitle mb-2 text-muted">Card subtitle</p>
                                <p class="">Pelatihan Workshop Fintech Syariah yang di khususkan untuk
                                    dosen demi meningkatkan
                                    pengetahuan dalam bidang syariah</p>
                                <button class="btn btn-afsi mt-3">Ikuti program</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/business.png') }}" alt="">
                            <div class="card-body text-start">
                                <a href="#">
                                    <p class="card-title fs-24 text-lg fw-700 text-dark">Workshop Fintech Syariah..</p>
                                </a>
                                <p class="card-subtitle mb-2 text-muted">Card subtitle</p>
                                <p>Pelatihan Workshop Fintech Syariah yang di khususkan untuk dosen demi meningkatkan
                                    pengetahuan dalam bidang syariah</p>
                                <button class="btn btn-afsi mt-3">Ikuti program</button>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/laptop.png') }}" alt="">
                            <div class="card-body text-start">
                                <a href="#">
                                    <p class="card-title fs-24 text-lg fw-700 text-dark">Workshop Fintech Syariah..</p>
                                </a>
                                <p class="card-subtitle mb-2 text-muted">Card subtitle</p>
                                <p>Pelatihan Workshop Fintech Syariah yang di khususkan untuk dosen demi meningkatkan
                                    pengetahuan dalam bidang syariah</p>
                                <button class="btn btn-afsi mt-3">Ikuti program</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- about --}}
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-17">
            <div class="row position-relative">
                <div class="col-12 col-lg-6 pt-10 order-2 order-lg-1 tw-flex tw-justify-center">
                    <div class="">
                        <p class="text-afsi2 fw-500 text-lg">About</p>
                        <p class="display-4 text-dark">TujuanAFSI Academic Partner (AAP)</p>
                        <ul class="unordered-list bullet-aqua">
                            <li>Membangun kolaborasi ekosistem fintech syariah di Indonesia</li>
                            <li>Meningkatkan literasi fintech syariah di kalanganmahasiswa</li>
                            <li>Penguatan sumberdaya insani untuk industri fintech syariah di Indonesia</li>
                            <li>Peningkatan penelitian dan pengembangan di bidang fintech syariah.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 position-relative order-1 order-lg-2">
                    <img class="img-fluid tw-mx-auto" src="{{ asset('img/lady-in-smile.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- manfaat --}}
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-17">
            <p class="text-dark display-4 text-center">Manfaat mengikuti pelatihan menjadi academy partner AFSI</p>
            <div class="row py-6 d-flex justify-content-between">
                <div class="col-12 col-lg-3 tw-py-6">
                    <img class="bg-gradient-purple p-3 rounded tw-mx-auto lg:tw-ml-0"
                        src="{{ asset('img/icon-home-data.png') }}" alt="">
                    <p class="display-6 fw-500 text-dark pt-2 tw-text-center lg:tw-text-left">Daftar dengan mudah menjadi
                        anggota
                    </p>
                    <p class="text-normal tw-text-center lg:tw-text-left">kami mencari anak muda yang memiliki rasa
                        generosity yang mampu membentuk
                        karakter dengan baik.</p>
                </div>
                <div class="col-12 col-lg-3 tw-py-6">
                    <img class="bg-gradient-aqua p-3 rounded tw-mx-auto lg:tw-ml-0"
                        src="{{ asset('img/icon-home-teach.png') }}" alt="">
                    <p class="display-6 fw-500 text-dark pt-2 tw-text-center lg:tw-text-left">Daftar dengan mudah menjadi
                        anggota</p>
                    <p class="text-normal tw-text-center lg:tw-text-left">kami mencari anak muda yang memiliki rasa
                        generosity yang mampu membentuk
                        karakter dengan baik.</p>
                </div>
                <div class="col-12 col-lg-3 tw-py-6">
                    <img class="bg-gradient-orange p-3 rounded tw-mx-auto lg:tw-ml-0"
                        src="{{ asset('img/icon-home-cert.png') }}" alt="">
                    <p class="display-6 fw-500 text-dark pt-2 tw-text-center lg:tw-text-left">Daftar dengan mudah menjadi
                        anggota</p>
                    <p class="text-normal tw-text-center lg:tw-text-left">kami mencari anak muda yang memiliki rasa
                        generosity yang mampu membentuk
                        karakter dengan baik.</p>
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-12 col-lg-6 pt-10 order-2 order-lg-1 tw-py-5 ">
                    <p class="display-6 text-dark py-5 tw-text-center lg:tw-text-left">Maanfaat bagi perguruan tinggi</p>
                    <ul class="unordered-list bullet-aqua ">
                        <li>Mendapatkan sertifikat AFSI Academic partner untuk perguruan tinggi</li>
                        <li>Mendapatkan sertifikat pelatihan fintech syariah untuk dosen yang telah mengikuti worksho
                        </li>
                        <li>Mendapatkan modul pelatihan fintech syariah</li>
                        <li>Penyaluran mahasiswa magang ke perusahaan fintech anggota AFSI</li>
                        <li>Kerjasama penelitian dan pengembangan di bidang fintech syariah</li>
                        <li>Nama dan logo perusahaan tinggi akan di cantumkan di website AFSI</li>
                    </ul>
                    <p class="display-6 text-dark py-5 tw-text-center lg:tw-text-left">Maanfaat bagi mahasiswa</p>
                    <ul class="unordered-list bullet-aqua">
                        <li>Mahasiswa mendapatkan sertifikat pelatihan yang dikeluarkan oleh Asosiasi Fintech Syariah
                            indonesia (AFSI) setelah mengikuti pelatihan yang di selenggarakan perguruan tinggi bekerja
                            sama
                            dengan AFSI</li>
                        <li>Mahasiswa berkesempatan praktek kerja lapangan (magang) di AFSi dan perusahaan anggota AFSI
                        </li>
                        <li>Terbukanya kesempatan kerja di perusahaan fintech anggota AFSi</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 position-relative order-1 order-lg-2 d-flex align-items-center">
                    <img class="img-fluid" src="{{ asset('img/student.png') }}" alt="">
                </div>
            </div>
    </section>

    {{-- partner --}}
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-17">
            <p class="display-4 text-dark text-center">Keanggotaan <span class="text-afsi2">Asosiasi Fintech</span>
                Syariah
                Indonesia</p>
            <h2 class="fs-15 text-uppercase text-muted text-center mb-8">Trusted by Over 5000 Clients</h2>

            <div class="row d-flex">
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/ats.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center">ALAMI Teknologi Shariah</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/upn.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center">Falkutas Ekonomi dan Bisnis UPN Veteran Jakarta</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/univ-islam-bandung.png') }}" alt="" width="135"
                        height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center">Falkutas Shariah Universitas Islam Bandung</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/hibra.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center">HIBRA CONSULTING</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/hijrah.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">HIJRAH NUSWANTARA</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/aladin.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT Bank Aladin Syariah Tbk</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/kresya.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">Kresya</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/alumni.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT ALUMNIA SINERGI ADIKARSA</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/bank-riau.png') }}" alt="" width="135"
                        height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT Bank Riau Kepri</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/efunding.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT Efunding Teknologi Keuangan</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/dana-syariah.png') }}" alt="" width="135"
                        height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT Dana Syariah Indonesia</p>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <img class="mb-3 mx-auto" src="{{ asset('img/elitery.png') }}" alt="" width="135" height="135" />
                    <p class="fw-500 text-dark pb-0 tw-text-center mt-0">PT Data Sinergi Tama Jaya</p>
                </div>
            </div>
            <!-- /.owl-carousel -->
        </div>
    </section>

    {{-- workshop --}}
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-17">
            <div class="row d-flex justify-content-center">
                <div class="carousel owl-carousel" data-margin="15" data-nav="false" data-dots="true" data-autoplay="true"
                    data-loop="true" data-autoplay-timeout="5000"
                    data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    <div class="item">
                        <div href="#" class="items-owl-carousel col-lg-12">
                            <div class=" position-relative">
                                <div class="card card-workshop overflow-hidden position-relative card--elevated">
                                    <a href="#" class="position-absolute w-100 overlay-workshop container py-3">
                                        <p class="text-white card-title">Teknologi Cloud Computing</p>
                                        <small class="text-white lh-1">22 november 2021</small>
                                        <br>
                                        <small class="text-white lh-1">16:30-18:00</small>
                                    </a>
                                    <img src="{{ asset('img/workshop1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div href="#" class="items-owl-carousel col-lg-12">
                            <div class=" position-relative">
                                <div class="card card-workshop overflow-hidden position-relative card--elevated">
                                    <a href="#" class="position-absolute w-100 overlay-workshop container py-3">
                                        <p class="text-white card-title">Teknologi Cloud Computing</p>
                                        <small class="text-white lh-1">22 november 2021</small>
                                        <br>
                                        <small class="text-white lh-1">16:30-18:00</small>
                                    </a>
                                    <img src="{{ asset('img/workshop2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div href="#" class="items-owl-carousel col-lg-12">
                            <div class=" position-relative">
                                <div class="card card-workshop overflow-hidden position-relative card--elevated">
                                    <a href="#" class="position-absolute w-100 overlay-workshop container py-3">
                                        <p class="text-white card-title">Teknologi Cloud Computing</p>
                                        <small class="text-white lh-1">22 november 2021</small>
                                        <br>
                                        <small class="text-white lh-1">16:30-18:00</small>
                                    </a>
                                    <img src="{{ asset('img/workshop3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div href="#" class="items-owl-carousel col-lg-12">
                            <div class=" position-relative">
                                <div class="card card-workshop overflow-hidden position-relative card--elevated">
                                    <a href="#" class="position-absolute w-100 overlay-workshop container py-3">
                                        <p class="text-white card-title">Teknologi Cloud Computing</p>
                                        <small class="text-white lh-1">22 november 2021</small>
                                        <br>
                                        <small class="text-white lh-1">16:30-18:00</small>
                                    </a>
                                    <img src="{{ asset('img/workshop1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
