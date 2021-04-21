<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data_dosen;
use App\Exports\Data_dosenExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
        //untuk menampilkan data mahasiswa yang sudah dibuat
        public function index()
        {
            //mengambil data dari table data_mahasiswa
            $index = DB::table('data_dosen')->paginate(10);
            
            //mengirim data pegawai ke view index
            return view('dosen.index',['data_dosen' => $index]);
        }
        // method untuk menampilkan view form tambah mahasiswa
        public function tambah()
        {
            //memanggil view tambah
            return view ('dosen.tambah');
        }
    
       // method untuk insert data ke table pegawai
        public function proses(Request $request)
        {
            // insert data ke table pegawai
            DB::table('data_dosen')->insert([
                    'nama' => $request->nama,
                    'nid' => $request->nid,
                    'jabatan' => $request->jabatan,
                        'email' => $request->email,
                    'mode_waktu' => $request->mode_waktu
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/dosen');
        }
    
        public function edit($id)
        {
            //mengambil data pegawai berdasarkan id yang dipilih
            $dosen = DB::table('data_dosen')->where('id',$id)->get();
            //passing data pegawai yang didapat ke view edit.blade.php
            return view ('dosen.edit',['data_dosen' => $dosen]);
        }
    
        //update data pegawai
        public function update(Request $request)
        {
            //update data mahasiswa
            DB::table('data_dosen')->where('id',$request->id)->update([
                'nama' => $request->nama,
                    'nid' => $request->nid,
                    'jabatan' => $request->jabatan,
                        'email' => $request->email,
                    'mode_waktu' => $request->mode_waktu
            ]);
            // kembali ke halaman data mahasiswa
            return redirect()->route('dosen.index')
                        ->with('success','Post updated successfully');
        }
    
        public function hapus($id)
        {
            //menghapus data mahasiswa berdasarkan id yang dipilih
            DB::table('data_dosen')->where('id',$id)->delete();
    
            //alihkan halaman ke halaman pegawai
            return redirect ('/dosen');
        }
        
        public function cari(Request $request)
        {
                    // menangkap data pencarian
                    $cari = $request->cari;
     
                        // mengambil data dari table pegawai sesuai pencarian data
                    $gunadarma = DB::table('data_dosen')
                    ->where('nama','like',"%".$cari."%")
                    ->paginate();
     
                        // mengirim data pegawai ke view index
                    return view('dosen.index',['data_dosen' => $gunadarma]);
        }

        public function dashboard()
        {
            //mengambil data dari table data_mahasiswa
            $dashboard = DB::table('data_dosen')->paginate(10);
            
            //mengirim data pegawai ke view index
            return view('dashboard.dashboard_dosen',['data_dosen' => $dashboard]);
        }

        //API UNTUK DOSEN

        // public function tampilan($uuid)
        // {
        //     $dosen ['dosen'] = data_dosen::select('uuid' ,'NAMA', 'NID')->find($uuid);
        //     return response()->json([$dosen,'Massage' => 'Dosen Berhasil Absen'], 200);
        // }  
            
        public function tampilan($uuid)
        {
        if($dosen = data_dosen::where('uuid', $uuid)->first())
            {        
            return response()->json([
                'uuid' => $dosen->uuid,
                'nama' => $dosen->nama,
                'nid' => $dosen->nid,
                'jabatan' => $dosen->jabatan,
                'email' => $dosen->email,
                'waktu_datang' => $dosen->waktu_datang,
                'waktu_keluar' => $dosen->waktu_keluar,
                'message' => 'Dosen Berhasil Absen'], 200);
            }
            else{
                return response()->json(['message' => 'KARTU MAHASISWA TIDAK DIKENAL'], 400);
            }
        }

        public function show($id)
        {
            $data ['data'] = data_dosen::select('MODE_WAKTU')->find($id);
                return response()->json($data, 200);  
        }

        public function input(request $request)
        {
            $dosen = new data_dosen;
            $dosen->uuid = $request->uuid;
            $dosen->save();

            return response()->json([
                'uuid' => $dosen->uuid,
                'id' => $dosen->id,
                'nama' => $dosen->nama,
                'nid' => $dosen->nid,
                'message' => 'Kartu Dosen Berhasil di input'], 200);
        }
        public function export_excel()
        {
            return Excel::download(new Data_dosenExport, 'data_dosen.xlsx');
        }
    
}

