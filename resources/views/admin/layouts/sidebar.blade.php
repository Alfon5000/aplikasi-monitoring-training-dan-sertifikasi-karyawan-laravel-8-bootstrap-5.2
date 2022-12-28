<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
        <img src="/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Training & Sertifikasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="text-light">Admin</span>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link @yield('dashboard-active')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MASTER</li>
                <li class="nav-item">
                    <a href="/admin/data-karyawan" class="nav-link @yield('data-karyawan-active')">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/data-training" class="nav-link @yield('data-training-active')">
                        <i class="nav-icon fas fa-medal"></i>
                        <p>
                            Data Training
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/data-sertifikasi" class="nav-link @yield('data-sertifikasi-active')">
                        <i class="nav-icon fas fa-award"></i>
                        <p>
                            Data Sertifikasi
                        </p>
                    </a>
                </li>
                <li class="nav-header">PENDAFTARAN</li>
                <li class="nav-item">
                    <a href="/admin/pendaftaran-training" class="nav-link @yield('pendaftaran-training-active')">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Pendaftaran Training
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/pendaftaran-sertifikasi" class="nav-link @yield('pendaftaran-sertifikasi-active')">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Pendaftaran Sertifikasi
                        </p>
                    </a>
                </li>
                <li class="nav-header">PELAKSANAAN</li>
                <li class="nav-item">
                    <a href="/admin/pelaksanaan-training" class="nav-link @yield('pelaksanaan-training-active')">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Pelaksanaan Training
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/ujian-sertifikasi" class="nav-link @yield('ujian-sertifikasi-active')">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Ujian Sertifikasi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
