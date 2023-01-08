<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <span class="font-weight-bold">{{ auth()->user()->nama }}</span>
        <i class="fas fa-user-cog ml-2"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <a href="/admin/profil" class="dropdown-item @yield('profil-active')">
          <i class="fas fa-user mr-2"></i>Profil
        </a>
        <div class="dropdown-divider"></div>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>Keluar
          </button>
        </form>
      </div>
    </li>
  </ul>
</nav>
