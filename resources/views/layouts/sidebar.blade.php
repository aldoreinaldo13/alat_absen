<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="javascript:void(0)">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="javascript:void(0)">St</a>
  </div>
  <ul class="sidebar-menu">
    <li>
      <a class="nav-link active" href="{{ route('dashboard.dashboard_dosen') }}">
        <i class="icon-item fas fa-signal"></i> <span>Dashboard Dosen</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ route('dashboard.dashboard_mahasiswa') }}">
        <i class="icon-item fas fa-signal"></i> <span>Dashboard Mahasiswa</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/dosen/tambah') }}">
        <i class="icon-item fas fa-file"></i> <span>Buat Data Dosen</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/mahasiswa/tambah') }}">
        <i class="icon-item fas fa-file"></i> <span>Buat Data Mahasiswa</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ route('dosen.index') }}">
        <i class="icon-item fas fa-file"></i> <span>Data Dosen</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ route('mahasiswa.index') }}">
        <i class="icon-item fas fa-file"></i> <span>Data Mahasiswa</span>
      </a>
    </li>
  </ul>
</aside>
