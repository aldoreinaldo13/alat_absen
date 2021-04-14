<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
        
    public function data(){
            return view ('data');
        //     #untuk memanggil view data
    }
// #untuk memanggil view data
    public function hasil(request $request){
        //     #untuk mengeluarkan hasil dari proses function data
            $npm = $request->input('npm');
            $password = $request->input('password');
            return "npm : ".$npm.", password : ".$password;
    }
}
