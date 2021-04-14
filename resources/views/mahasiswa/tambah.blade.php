@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h2>DATA MAHASISWA</h2>
    </div>
	<div class="section-body">
		<form action="/mahasiswa/proses" method="post">
		{{ csrf_field() }}
			<div class="card-body">
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" class="form-control" name="nama" required="required"> 
				</div>
				<div class="form-group">
					<label>NPM</label>
					<input type="number" class="form-control" name="npm" required="required"> 
				</div>
				<div class="form-group">
					<label>JURUSAN</label>
					<input type="text" class="form-control" name="jurusan" required="required"> 
				</div>
				<div class="form-group">
					<label>KELAS</label>
					<input type="varchar" class="form-control" name="kelas" required="required"> 
				</div>
				<div class="form-group">
					<label>EMAIL</label>
					<input type="varchar" class="form-control" name="email" required="required"> 
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
				<input class="btn btn-info" type="submit" value="Simpan Data">
				<a href="/mahasiswa" class="btn btn-danger"> Kembali </a>
			</div>
		</form>	  
  	</div>
</section>

@endsection