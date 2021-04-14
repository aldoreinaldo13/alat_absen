@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h2>DATA DOSEN</h2>
    </div>
	<div class="section-body">
		<form action="/dosen/proses" method="post">
		{{ csrf_field() }}
			<div class="card-body">
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" class="form-control" name="nama" required="required"> 
				</div>
				<div class="form-group">
					<label>NID</label>
					<input type="number" class="form-control" name="nid" required="required"> 
				</div>
				<div class="form-group">
					<label>JABATAN</label>
					<input type="text" class="form-control" name="jabatan" required="required"> 
				</div>
				<div class="form-group">
					<label>EMAIL</label>
					<input type="varchar" class="form-control" name="email" required="required"> 
				</div>
				<div class="form-group">
					<label class="d-block">MODE WAKTU</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mode_waktu" id="0" value="0">
						<label class="form-check-label" for="waktu_datang">
						WAKTU DATANG
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mode_waktu" id="1" value="1">
						<label class="form-check-label" for="waktu_keluar">
						WAKTU KELUAR
						</label>
					</div>
				</div>
				
				<input class="btn btn-info" type="submit" value="Simpan Data">
				<a href="/dosen" class="btn btn-danger"> Kembali </a>
			</div>
		</form>	  
  	</div>
</section>

@endsection