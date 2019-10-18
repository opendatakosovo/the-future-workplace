<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Graduates;
use Illuminate\Support\Facades\DB;
class WorkforceExport implements FromCollection
{

    protected $year;

    public function __construct($year,$type)
    {
        $this->year = $year;
        $this->type = $type;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $year = $this->year;
        $type = $this->type;
        $query  = Graduates::query();
        $query = $query->select( DB::raw('*'));
        $query = $query->join( 'schools','schools.id','=','graduates.school_id');
        if($type == 'uni'){
            $query = $query->where('is_high_school', '=', 0);
        }
        else{
            $query = $query->where('is_high_school', '=', 1);
        }
        if($year != 'all' ){
            $query = $query->where('year', '=', $year);
        }
        $data = $query->get();
        
        return $data;
    }
}
