<?php

namespace App\Exports;

use App\data_dosen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Data_dosenExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data_dosen::all();
    }

    public function headings(): array

    {

        return [

            'id',

            'nama',

            'nid',

            'uuid',

            'jabatan',
            
            'email',

            'mode_waktu',

            'waktu_datang',

            'waktu_keluar',

        ];

    }
}
