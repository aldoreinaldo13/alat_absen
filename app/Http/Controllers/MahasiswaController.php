<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $nama = "muhammad reinaldo";
// #untuk menambahkan isi dari file biodata tersebut (passing data)
        $matapelajaran = ["Kalkulus","Elektronika","Fisika"];
// #untuk menambahkan isi tampilan untuk mata pelajaran di file biodata (passing data)
        // return view('biodata',['nama' => $nama]);
// #untuk membuat mengarahkan ke biodata.php
        return view('biodata',['nama' => $nama, 'matpel' => $matapelajaran]);
// #jika ingin menambahkan tampilan jadi 1 tempat di view biodata

    }
}

