<nav class="navbar navbar-expand-lg center-nav transparent navbar-light position-absolute">
    <div class="container-fluid px-5 flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="./index.html">
                <img src="{{ asset('img/afsi.png') }}" alt="">
            </a>
        </div>
        <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none text-center">
                <a href="/"><img src="{{ asset('img/afsi-white.png') }}" alt="" width="132" height="132" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                    aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a
                        class="nav-link hover:tw--translate-y-1 tw-text-base tw-text-primary2 tw-transition-all tw-duration-200 tw-ease-linear {{ request()->is('/') ? 'tw-active' : '' }}"
                        href="#">Home</a>
                </li>
                <li class="nav-item"><a
                        class="nav-link hover:tw--translate-y-1 tw-text-base tw-text-primary2 tw-transition-all tw-duration-200 tw-ease-linear {{ request()->is('/about') ? 'active' : '' }}"
                        href="#">About</a></li>
                <li class="nav-item"><a
                        class="nav-link hover:tw--translate-y-1 tw-text-base tw-text-primary2 tw-transition-all tw-duration-200 tw-ease-linear {{ request()->is('/materi-afsi') ? 'active' : '' }}"
                        href="#">Materi
                        Afsi</a></li>
                <li class="nav-item"><a
                        class="nav-link hover:tw--translate-y-1 tw-text-base tw-text-primary2 tw-transition-all tw-duration-200 tw-ease-linear {{ request()->is('/program') ? 'active' : '' }}"
                        href="#">Program</a>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                {{-- <li class="nav-item dropdown language-select text-uppercase">
                    <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">En</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item d-none d-md-block">
                    <a href="./contact.html" class="btn btn-sm btn-afsi rounded">Masuk / Daftar</a>
                </li>
                <li class="nav-item d-lg-none">
                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                            data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
