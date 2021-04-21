<?php

namespace App\Exports;

use App\data_mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Data_mahasiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data_mahasiswa::all();
    }

    public function headings(): array

    {

        return [

            'id',

            'nama',

            'npm',

            'uuid',

            'jurusan',
            
            'kelas',

            'email',

            'mode_waktu',

            'waktu_datang',

            'waktu_keluar',

        ];

    }
}
