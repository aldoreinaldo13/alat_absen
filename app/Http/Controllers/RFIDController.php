<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RFIDController extends Controller
{
    public function home(){
        return view('home');
    }
    public function daftar_user(){
        return view('daftar_user');
    }
    public function data_alat (){
        return view ('data_alat');
    }
}
