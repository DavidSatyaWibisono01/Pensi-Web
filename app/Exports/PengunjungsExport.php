<?php

namespace App\Exports;

use App\Models\Pengunjung;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengunjungsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengunjung::all();
    }
}
