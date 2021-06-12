<?php

namespace App\Exports;

use App\Models\Buku;
use Maatwebsite\Excel\Concern\FromCollection;

class DATA_1461900170 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return buku::all();
    }
}
