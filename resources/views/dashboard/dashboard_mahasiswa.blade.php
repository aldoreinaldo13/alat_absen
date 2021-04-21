@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <h1>DATA MAHASISWA</h1>    
  </div>

  <a href="/mahasiswa/export_excel_mahasiswa" class="btn btn-success my-3" target="_blank">EXCEL</a>


  <div class="section-body">

    <div class="card">
      <!-- <div class="card-header">
        <h2>Dashboard Mahasiswa</h2>
      </div> -->
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
              <th>NAMA</th>
              <th>NPM</th>
              <th>JURUSAN</th>
              <th>KELAS</th>
              <th>EMAIL</th>
              <th>WAKTU_DATANG</th>
              <th>WAKTU_KELUAR</th>
            </tr>
            </thead>
            @foreach($data_mahasiswa as $index)
            <tbody>
            <tr>
              <td>{{ $index->nama }}</td>
              <td>{{ $index->npm }}</td>
              <td>{{ $index->jurusan }}</td>
              <td>{{ $index->kelas }}</td>
              <td>{{ $index->email }}</td>
              <td>{{ $index->waktu_datang }}</td>
              <td>{{ $index->waktu_keluar }}</td>
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

@endsection