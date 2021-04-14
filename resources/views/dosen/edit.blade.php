@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
    <section class="section">
        <div class="card">
        <div class="card-header">
            <h2>EDIT DOSEN</h2>
        </div>
        @foreach($data_dosen as $index)
        <form action="/dosen/update" method="post">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $index->id }}"> <br/>
                <div class="card-body">
                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" class="form-control" name="nama" required="required" value="{{ $index->nama }}"> 
                        </div>
                        <div class="form-group">
                            <label>NID</label>
                            <input type="number" class="form-control" name="nid" required="required" value="{{ $index->nid }}"> 
                        </div>
                        <div class="form-group">
                            <label>JABATAN</label>
                            <input type="text" class="form-control" name="jabatan" required="required" value="{{ $index->jabatan }}"> 
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="varchar" class="form-control" name="email" required="required" value="{{ $index->email }}"> 
                        </div>
                        <div class="form-group">
                            <label class="d-block">MODE WAKTU</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_waktu" id="0" value="0">
                                <label class="form-check-label" for="waktu_datang">
                                WAKTU_DATANG
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode_waktu" id="1" value="1">
                                <label class="form-check-label" for="waktu_keluar">
                                WAKTU_KELUAR
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <input class="btn btn-info" type="submit" value="Simpan Data">
            <a href="/dosen" class="btn btn-danger"> Kembali </a>
        </form>
        @endforeach
    </section>
@endsection