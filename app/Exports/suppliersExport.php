<?php

namespace App\Exports;

use App\supplier;
use Maatwebsite\Excel\Concerns\FromCollection;

class suppliersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return supplier::all();
    }
}
