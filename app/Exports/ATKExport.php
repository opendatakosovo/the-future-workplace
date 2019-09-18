<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ATKExport implements FromCollection
{

    protected $year;

    public function __construct($year)
    {
        $this->year = $year;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}
