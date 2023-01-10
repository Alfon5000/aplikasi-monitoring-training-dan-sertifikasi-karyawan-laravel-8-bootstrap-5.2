<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('logo.png') }}" alt="Logo" style="max-height: 50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link @yield('beranda')" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @yield('pendaftaran')" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Pendaftaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @yield('pendaftaran-sertifikasi')" href="/pendaftaran/sertifikasi">Pendaftaran Sertifikasi</a>
            </li>
            <li><a class="dropdown-item @yield('pendaftaran-training')" href="/pendaftaran/training">Pendaftaran Training</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @yield('pelaksanaan')" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Pelaksanaan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @yield('pelaksanaan-sertifikasi')" href="/pelaksanaan/sertifikasi">Ujian Sertifikasi</a></li>
            <li><a class="dropdown-item @yield('pelaksanaan-training')" href="/pelaksanaan/training">Pelaksanaan Training</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @yield('sertifikat')" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Sertifikat
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @yield('sertifikat-sertifikasi')" href="/sertifikat/sertifikasi">Sertifikat Kompetensi</a></li>
            <li><a class="dropdown-item @yield('sertifikat-training')" href="/sertifikat/training">Sertifikat Training</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <span>{{ auth()->user()->nama }}</span>
            {{-- <i class="bi bi-person-circle"></i> --}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item @yield('profil-active')" href="/profil">Profil</a></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Keluar</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
