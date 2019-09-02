<?php


namespace App\Http\Controllers\Admin;


use App\businesses_map;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class BusinessDataController extends Controller
{
    public function index(){

        $query = businesses_map::query();
        $query = $query->select(DB::raw('*'));
        $query = $query->limit('20');
        $results = $query->get();
        foreach($results as $res){
            $business_data[] = $res;
        }
        $data = array(
          'business_data' => $business_data
        );
        return view('admin.business_data')->with('data',$data);
    }
}
