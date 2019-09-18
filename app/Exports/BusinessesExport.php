<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\businesses_map;
use Illuminate\Support\Facades\DB;
class BusinessesExport implements FromCollection
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
        $query  = businesses_map::query();
        $query = $query->select( DB::raw('*'));
        if($year != 'all' ){
            $query = $query->where('date_of_registration', 'LIKE', '%' . $year . '%');
        }
        $data = $query->get();

        return $data;

//        return businesses_map::all();
    }
}
