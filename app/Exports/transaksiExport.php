<?php

namespace App\Exports;

use App\transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class transaksiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return transaksi::all();
    }
}
