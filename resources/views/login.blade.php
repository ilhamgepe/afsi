@extends('layouts.main')

@section('section-content')
    <div class="wrapper bg-light">
        <section class="h-100 gradient-form">
            <div class="container py-14 py-md-17 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card rounded-3 text-black overflow-hidden">
                            <div class="row g-0 d-flex align-items-center overflow-hidden">
                                <div class="col-12 col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="{{ asset('img/afsi.png') }}" style="width: 185px;" alt="logo">
                                        </div>

                                        <form>
                                            <div class="py-6">
                                                <p class="text-2xl fw-600 text-dark">Login</p>
                                                <p>masuk untuk mendapatkan lebih banyak informasi</p>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label text-dark text-lg" for="loginemail">Email</label>
                                                <input type="email" id="loginemail" class="form-control"
                                                    placeholder="userid@email.com" />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label text-dark text-lg" for="loginpw">Password</label>
                                                <input type="password" id="loginpw" class="form-control"
                                                    placeholder="Min.8 Karater" />
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-afsi mb-3 w-100" type="button">Log in</button>
                                                <a class="text-muted" href="#!">Forgot password?</a>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Belum mendaftar?</p>
                                                <button type="button" class="btn btn-outline-afsi">Buat akun</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 d-none d-lg-block position-relative">
                                    <p class="text-4xl fw-600 text-white center-x-y text-login-overlay w-75 text-start">
                                        Solusi untuk
                                        Belajar
                                        Masalah
                                        <span class="text-salmon">Keuangan</span>
                                        Syariah
                                    </p>
                                    <div class="w-100 position-relative">
                                        <div class="overlay-login"></div>
                                        <img class="position-absolute top-0 z-1"
                                            src="{{ asset('img/login-top-left.png') }}" alt="">
                                        <img class="position-relative" src="{{ asset('img/tanam-uang.png') }}" alt="">
                                        <img class="position-absolute end-0 bottom-0 z-1"
                                            src="{{ asset('img/login-bottom-right.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
