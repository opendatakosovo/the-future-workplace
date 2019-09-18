<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Graduates;
use Illuminate\Support\Facades\DB;
class WorkforceExport implements FromCollection
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
        $year = $this->year;
        $query  = Graduates::query();
        $query = $query->select( DB::raw('*'));
        if($year != 'all' ){
            $query = $query->where('year', '=', $year);
        }
        $data = $query->get();

        return $data;
    }
}
