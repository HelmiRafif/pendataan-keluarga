<?php

namespace App\Exports;

use App\Exports\Sheets\kependudukanx;
use App\Exports\Sheets\kbx;
use App\Exports\Sheets\pembangunanx;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class posyanduExport implements WithMultipleSheets
{

    use Exportable;
    protected $ekspor;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new kependudukanx();
        $sheets[] = new kbx();
        $sheets[] = new pembangunanx();

        return $sheets;
    }
}


