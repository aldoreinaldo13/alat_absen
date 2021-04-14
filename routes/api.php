<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/detail','GunadarmaController@detail_mahasiswa');

//API MAHASISWA
// Route::get('/alat/detail/{id}','GunadarmaController@mahasiswa1');
// Route::get('/gunadarma/detail/{id}','GunadarmaController@detail')->name('.detail');
// route::get('mahasiswa','GunadarmaController@detail_mahasiswa');
route::get('alat/detail_fleg_mahasiswa/{id}','GunadarmaController@show');
route::get('alat/detail_mahasiswa/{uuid}','GunadarmaController@tampilan')->name('.tampilan');
route::post('/alat/input_uid_mahasiswa','GunadarmaController@input')->name('.input');

//API DOSEN
route::get('alat/detail_fleg_dosen/{id}','DosenController@show');
route::get('alat/detail_dosen/{uuid}','DosenController@tampilan')->name('.tampilan');

route::post('/alat/input_uid_dosen','DosenController@input')->name('.input');