<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data_mahasiswa;
use App\Exports\Data_mahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class GunadarmaController extends Controller
{
    //untuk menampilkan data mahasiswa yang sudah dibuat
    public function index()
    {
        //mengambil data dari table data_mahasiswa
        $index = DB::table('data_mahasiswa')->paginate(10);
        
        //mengirim data pegawai ke view index
        return view('mahasiswa.index',['data_mahasiswa' => $index]);
    }
    // method untuk menampilkan view form tambah mahasiswa
    public function tambah()
    {
        //memanggil view tambah
        return view ('mahasiswa.tambah');
    }

   // method untuk insert data ke table pegawai
    public function proses(Request $request)
    {
	// insert data ke table pegawai
	DB::table('data_mahasiswa')->insert([
		'nama' => $request->nama,
		'npm' => $request->npm,
		'jurusan' => $request->jurusan,
        'kelas' => $request->kelas,
        'email' => $request->email,
		'mode_waktu' => $request->mode_waktu
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id yang dipilih
        $mahasiswa = DB::table('data_mahasiswa')->where('id',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view ('mahasiswa.edit',['data_mahasiswa' => $mahasiswa]);
    }

    //update data pegawai
    public function update(Request $request)
    {
        //update data mahasiswa
        DB::table('data_mahasiswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'email' => $request->email,
		    'mode_waktu' => $request->mode_waktu
        ]);
        // kembali ke halaman data mahasiswa
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        //menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('data_mahasiswa')->where('id',$id)->delete();

        //alihkan halaman ke halaman pegawai
        return redirect ('/mahasiswa');
    }
    
    public function cari(Request $request)
        {
                    // menangkap data pencarian
                    $cari = $request->cari;
     
                        // mengambil data dari table pegawai sesuai pencarian data
                    $gunadarma = DB::table('data_mahasiswa')
                    ->where('nama','like',"%".$cari."%")
                    ->paginate();
     
                        // mengirim data pegawai ke view index
                    return view('mahasiswa.index',['data_mahasiswa' => $gunadarma]);
        }

    public function dashboard()
    {
        //mengambil data dari table data_mahasiswa
        $dashboard = DB::table('data_mahasiswa')->paginate(10);
        
        //mengirim data pegawai ke view index
        return view('dashboard.dashboard_mahasiswa',['data_mahasiswa' => $dashboard]);
    }

    // public function detail($id_mahasiswa)
    // {
    //     $data_mahasiswa['data_mahasiswa'] = data_mahasiswa::where('id_mahasiswa', $id_mahasiswa)->first();

    //     return response()->json($data_mahasiswa);
    // }
    // public function detail_mahasiswa()
    // {
    //     return data_mahasiswa::all();
    // }
    // public function show($id_mahasiswa)
    // {
    //     return data_mahasiswa::find($id_mahasiswa);
    // }

    // public function mahasiswa1($id_mahasiswa)
    // {
    //     return response()->json(Data_mahasiswa::find($id_mahasiswa), 200);
    // }
    // public function show($id_mahasiswa)
    // {
    //     return data_mahasiswa::where('id_mahasiswa', $id_mahasiswa)->first();
    // }

    public function tampilan($uuid)
    {
        if($mahasiswa = data_mahasiswa::where('uuid', $uuid)->first())
        {
        return response()->json([
            'uuid' => $mahasiswa->uuid,
            'nama' => $mahasiswa->nama,
            'nid' => $mahasiswa->npm,
            'kelas' => $mahasiswa->kelas,
            'jurusan' => $mahasiswa->jurusan,
            'email' => $mahasiswa->email,
            'waktu_datang' => $mahasiswa->waktu_datang,
            'waktu_keluar' => $mahasiswa->waktu_keluar,
            'message' => 'Mahasiswa Berhasil Absen'], 200);
        }
        else{
            return response()->json(['message' => 'KARTU MAHASISWA TIDAK DIKENAL'], 400);
        }
    }

    // public function show($id)
    // {
    //     $data['data'] = data_mahasiswa::where('id', $id)->first();
    //      return response()->json($data, 200);
    // }

    public function input(request $request)
    {
        $mahasiswa = new data_mahasiswa;
        $mahasiswa->uuid = $request->uuid;
        $mahasiswa->save();

        return response()->json([
            'uuid' => $mahasiswa->uuid,
            'id' => $mahasiswa->id,
            'nama' => $mahasiswa->nama,
            'npm' => $mahasiswa->npm,
            'message' => 'Kartu Mahasiswa Berhasil di input'], 200);
    }
  
    public function show($id)
        {
            $data ['data'] = data_mahasiswa::select('MODE_WAKTU')->find($id);
                return response()->json($data, 200); 
        }

        public function export_excel_mahasiswa()
        {
            return Excel::download(new Data_mahasiswaExport, 'data_mahasiswa.xlsx');
        }

}

