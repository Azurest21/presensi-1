<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Absensi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE/dist/img/cowok-cool.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          @if (auth()->user()->level == "mahasiswa")
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-address-book"></i>
              <p>
                Absensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('absen-masuk') }}" class="nav-link">
                <i class="fas fa-sign-in-alt"></i>
                  <p>Absen Masuk</p>
                </a>
            </ul>
          </li>
          @endif
          
          @if (auth()->user()->level == "admin")
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-file-alt"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('filter-data') }}" class="nav-link">
                <i class="far fa-address-card"></i>
                  <p>Rekap Absen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-file-alt"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-matkul') }}" class="nav-link">
                <i class="far fa-address-card"></i>
                  <p>Data Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          
          
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                  Logout
              </p>
            </a>
          </li>
        
      </nav>
      <!--/.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>