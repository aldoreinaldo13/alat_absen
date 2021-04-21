<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="javascript:void(0)">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="javascript:void(0)">St</a>
  </div>
  <ul class="sidebar-menu">
    
    <li class="menu-header">DOSEN</li>
    <li>
      <a class="breadcrumb-item" href="{{ route('dashboard.dashboard_dosen') }}">
        <i class="fas fa-tachometer-alt"></i> <span>Dashboard Dosen</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/dosen/tambah') }}">
        <i class="icon-item fas fa-file"></i> <span>Buat Data Dosen</span>
      </a>
    </li>
    <li>
      <a class="breadcrumb-item active" href="{{ route('dosen.index') }}">
        <i class="fas fa-list"></i> <span>Lihat Data Dosen</span>
      </a>
    </li>
    <li class="menu-header">MAHASISWA</li>
    <li>
      <a class="breadcrumb-item" href="{{ route('dashboard.dashboard_mahasiswa') }}">
        <i class="fas fa-tachometer-alt"></i> <span>Dashboard Mahasiswa</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/mahasiswa/tambah') }}">
        <i class="icon-item fas fa-file"></i> <span>Buat Data Mahasiswa</span>
      </a>
    </li>
    <li>
      <a class="breadcrumb-item active" href="{{ route('mahasiswa.index') }}">
        <i class="fas fa-list"></i> <span>Lihat Data Mahasiswa</span>
      </a>
    </li>
  </ul>
</aside>
