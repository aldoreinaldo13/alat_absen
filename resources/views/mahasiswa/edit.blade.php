@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
    <section class="section">
        <div class="card">
        <div class="card-header">
            <h2>EDIT MAHASISWA</h2>
        </div>
        @foreach($data_mahasiswa as $index)
        <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $index->id }}"> <br/>
                <div class="card-body">
                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" class="form-control" name="nama" required="required" value="{{ $index->nama }}"> 
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="number" class="form-control" name="npm" required="required" value="{{ $index->npm }}"> 
                        </div>
                        <div class="form-group">
                            <label>JURUSAN</label>
                            <input type="text" class="form-control" name="jurusan" required="required" value="{{ $index->jurusan }}"> 
                        </div>
                        <div class="form-group">
                            <label>KELAS</label>
                            <input type="varchar" class="form-control" name="kelas" required="required" value="{{ $index->kelas }}"> 
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="varchar" class="form-control" name="email" required="required" value="{{ $index->email }}"> 
                        </div>
                        <div class="form-group">
                            <label class="d-block">Mode Waktu</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_waktu" id="0" value="0">
                                <label class="form-check-label" for="waktu_datang">
                                Waktu Datang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_waktu" id="1" value="1">
                                <label class="form-check-label" for="waktu_keluar">
                                Waktu Keluar
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <input class="btn btn-info" type="submit" value="Simpan Data">
            <a href="/mahasiswa" class="btn btn-danger"> Kembali </a>
        </form>
        @endforeach
    </section>
@endsection