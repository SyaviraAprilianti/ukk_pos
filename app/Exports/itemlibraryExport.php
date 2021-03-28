<?php

namespace App\Exports;

use App\itemlibrary;
use Maatwebsite\Excel\Concerns\FromCollection;

class itemlibraryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return itemlibrary::all();
    }
}
