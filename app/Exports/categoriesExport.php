<?php

namespace App\Exports;

use App\categori;
use Maatwebsite\Excel\Concerns\FromCollection;

class categoriesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return categori::all();
    }
}
