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

    <div class="card">
      <!-- <div class="card-header">
        <h2>Dashboard Dosen</h2>
      </div> -->
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
              <th>NAMA</th>
              <th>NID</th>
              <th>JABATAN</th>
              <th>EMAIL</th>
              <th>WAKTU_DATANG</th>
              <th>WAKTU_KELUAR</th>
            </tr>
            </thead>
            @foreach($data_dosen as $index)
            <tbody>
            <tr>
              <td>{{ $index->nama }}</td>
              <td>{{ $index->nid }}</td>
              <td>{{ $index->jabatan }}</td>
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