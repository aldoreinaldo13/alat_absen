<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route CRUD Dashboard
route::get('/','DosenController@dashboard')->name('dashboard.dashboard_dosen');

Route::get('login', function () {
	return view('login');
});

Route::get('/login/buat', function () {
	return view('create_login');
});

// route::get('/mahasiswa/{nama}', 'MahasiswaController@index');
// # {nama} untuk di route untuk menjalankan mahasiswa controller, jadi datanya ada di / kedua keluar datanya dari url

Route::get('/data', 'AbsenController@data');
Route::post('/data/hasil', 'AbsenController@hasil');
// # untuk menampilkan hasil dari get data manjadi post

// route::get('test', function () {
//     return view('login');
// });

route::get('/absen', 'RFIDController@home');
route::get('/absen/users', 'RFIDControllter@daftar_user');
route::get('/absen/data_alat', 'RFIDController@data');


//route CRUD
route::get('/mahasiswa','GunadarmaController@index')->name('mahasiswa.index');
route::get('/mahasiswa/tambah', 'GunadarmaController@tambah')->name('mahasiswa.tambah');
route::post('/mahasiswa/proses','GunadarmaController@proses')->name('mahasiswa.tambah');
route::get('/mahasiswa/edit/{id}','GunadarmaController@edit')->name('mahasiswa.edit');
route::post('/mahasiswa/update', 'GunadarmaController@update')->name('mahasiswa.edit');
route::get('/mahasiswa/hapus/{id}','GunadarmaController@hapus');
route::get('/mahasiswa/cari','GunadarmaController@cari');

//route CRUD Dosen
route::get('/dosen','DosenController@index')->name('dosen.index');
route::get('/dosen/tambah', 'DosenController@tambah')->name('dosen.tambah');
route::post('/dosen/proses','DosenController@proses')->name('dosen.tambah');
route::get('/dosen/edit/{id}','DosenController@edit')->name('dosen.edit');
route::post('/dosen/update', 'DosenController@update')->name('dosen.edit');
route::get('/dosen/hapus/{id}','DosenController@hapus');
route::get('/dosen/cari','DosenController@carii');


//route CRUD Dashboard
route::get('/dashboardmahasiswa','GunadarmaController@dashboard')->name('dashboard.dashboard_mahasiswa');

//route email 
route::get('/dosen/kirim/{id}','EmailController@sendEmailReminder');
route::get('/mahasiswa/kirim/{id}','EmailController@sendEmailMahasiswa');
