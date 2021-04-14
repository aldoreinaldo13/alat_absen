@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <h1>DATA MAHASISWA</h1>    
  </div>

  <div class="section-body">
    <!-- <a href="/mahasiswa/tambah" class="btn btn-outline-success">+ TAMBAH MAHASISWA </a> -->
    <div class="card">
            <div class = "card-header">
              <h4>Pencarian Data </h4>
            <div class="card-header-action">
                <form action="/mahasiswa/cari" method="GET">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control" placeholder="Search" value="{{ old('cari') }}">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                    </div>
                </form>
            </div>
          </div>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
              <th>NAMA</th>
              <th>NPM</th>
              <th>UUID</th>
              <th>JURUSAN</th>
              <th>KELAS</th>
              <th>EMAIL</th>
              <th>MODE WAKTU</th>
              <th>#</th>
            </tr>
            </thead>
            @foreach($data_mahasiswa as $index)
            <tbody>
            <tr>
              <td>{{ $index->nama }}</td>
              <td>{{ $index->npm }}</td>
              <td>{{ $index->uuid }}</td>
              <td>{{ $index->jurusan }}</td>
              <td>{{ $index->kelas }}</td>
              <td>{{ $index->email }}</td>
              <td>{{ $index->mode_waktu == 0 ? 'WAKTU MASUK' :  'WAKTU KELUAR' }}</td>
              <td>
              <a href="/mahasiswa/edit/{{ $index->id }}" class="btn btn-primary">Edit</a>
                |
              <a href="/mahasiswa/hapus/{{ $index->id }}"class="btn btn-danger">Hapus</a>
                |
              <a href="/mahasiswa/kirim/{{ $index->id }}"class="btn btn-info">Email</a>
              </td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          Halaman : {{ $data_mahasiswa->currentPage() }} <br/>
          Jumlah Data : {{ $data_mahasiswa->total() }} <br/>
          Data Per Halaman : {{ $data_mahasiswa->perPage() }} <br/> 
                      
          {{ $data_mahasiswa->links() }}
        </nav>
      </div>
    </div>
  </div>
      
</div>
<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection