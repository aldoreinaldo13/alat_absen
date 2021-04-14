@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <h1>DATA DOSEN</h1>    
  </div>

  <div class="section-body">
    <!-- <a href="/dosen/tambah" class="btn btn-outline-success">+ TAMBAH DOSEN </a> -->
    <div class="card">
            <div class = "card-header">
              <h4>Pencarian Data </h4>
            <div class="card-header-action">
                <form action="/dosen/cari" method="GET">
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
                <th>NID</th>
                <th>UUID</th>
                <th>JABATAN</th>
                <th>EMAIL</th>
                <th>MODE WAKTU</th>
                <th>#</th>
              </tr>
            </thead>
            @foreach($data_dosen as $index)
            <tbody>
            <tr>
              <td>{{ $index->nama }}</td>
              <td>{{ $index->nid }}</td>
              <td>{{ $index->uuid }}</td>
              <td>{{ $index->jabatan }}</td>
              <td>{{ $index->email }}</td>
              <td>{{ $index->mode_waktu == 0 ? 'WAKTU MASUK' :  'WAKTU KELUAR' }}</td>
              <td>
              <a href="/dosen/edit/{{ $index->id }}" class="btn btn-primary">Edit</a>
                |
              <a href="/dosen/hapus/{{ $index->id }}"class="btn btn-danger">Hapus</a>
              |
              <a href="/dosen/kirim/{{ $index->id }}"class="btn btn-info">Email</a>
              </td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          Halaman : {{ $data_dosen->currentPage() }} <br/>
          Jumlah Data : {{ $data_dosen->total() }} <br/>
          Data Per Halaman : {{ $data_dosen->perPage() }} <br/> 
                      
          {{ $data_dosen->links() }}
        </nav>
      </div>
    </div>
  </div>
      
</div>

@endsection