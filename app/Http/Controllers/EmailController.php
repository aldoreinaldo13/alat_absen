<?php

namespace App\Http\Controllers;

use App\Mail\email;
use App\data_dosen;
use App\data_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmailReminder(Request $request, $id)
    {
        $index = data_dosen::findOrFail($id);
        Mail::send('email', ['data_dosen' => $index], function ($m) use ($index) {
            $m->from('reinaldoseptano187@gmail.com', 'Data Absen');

            $m->to($index->email, $index->nama)->subject('Email Absen');
        });
		return redirect('/dosen');
    }

    public function sendEmailMahasiswa(Request $request, $id)
    {
        $index = data_mahasiswa::findOrFail($id);
        Mail::send('emailmahasiswa', ['data_mahasiswa' => $index], function ($m) use ($index) {
            $m->from('reinaldoseptano187@gmail.com', 'Data Absen');

            $m->to($index->email, $index->nama)->subject('Email Absen');
        });
		return redirect('/mahasiswa');
    }
}