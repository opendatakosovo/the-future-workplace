<?php


namespace App\Http\Controllers;


use App\Business_ActivitiesModel;
use App\businesses_map;
use App\Municipalities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class BusinessMapController extends Controller
{
    public function index()
    {

        $statuses = ['Active','Dissolved'];
        $activities =  Business_ActivitiesModel::select('activity_name')->get();
        $cities =  Municipalities::select('municipality')->get();
        foreach($activities as $activity){
            $activities_result[] = $activity->activity_name;
        }
        foreach($cities as $city){
            $cities_result[] = $city->municipality;
        }
        $data = array(
            'statuses'=>$statuses,
            'cities' => $cities_result,
            'activities' => $activities_result
        );

        return view('client.business_map')->with('data',$data);
    }


    public function fetch_data()
    {
        if(Cache::store('apc')->get('_business_result')){
            $bussiness_result =   Cache::store('apc')->get('_business_result');
        }else{
            $bussiness_result = businesses_map::all();
            Cache::store('apc')->put('_business_result', $bussiness_result, 10000);
        }

        $activities = Business_ActivitiesModel::all();

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

        $activities_array = [];


        if($cities == null){
            $cities = [];
            if(Cache::store('apc')->get('_cities')){
                $cities =   Cache::store('apc')->get('_cities');
            }else{
                foreach ($bussiness_result as $business) {
                    if(!in_array($business->municipality,$cities)){
                        $cities[] = $business->municipality;
                    }
                }
                Cache::store('apc')->put('_cities', $cities, 10000);
            }
        }




        if($activity == null  || $activity == 'Të gjitha'){
            foreach ($activities as $activity) {
                $activities_array[] = $activity->activity_name;
            }
        }else{
            $activities_array[] = $activity;
        }

            foreach($activities_array as $activity){
                $data[] = array(
                  'name' => $activity,
                  'data' =>  $this->get_col_data($cities,$year,$status,$activity)
                );
            }


        echo json_encode(array($cities,$data));

    }

    public function get_col_data($cities,$year = null , $status = null , $activity = null)
    {
        $res = [];
        $cities_converted = [];
        $data_converted = [];
        $final_res = [];

        //Cities



        $query  = businesses_map::query();

        $query = $query->select( DB::raw('COUNT(municipality) as count') , 'municipality');

        if($activity != null && $activity != 'Të gjitha'){
            $query = $query->where('activities', 'LIKE', '%' . $activity . '%');
        }

        if($cities != null){
            $cities_imploded = implode(',',$cities);
            $query = $query->whereIn('municipality', $cities);
        }

        if($year != null &&  $year != 'Të gjitha'){
            $query = $query->where('date_of_registration', 'LIKE', '%' . $year . '%');
        }
        if($status != null &&  $status != 'Të gjitha'){
            $query = $query->where('status', 'LIKE', '%' . $status . '%');
        }

        $query = $query->groupBy('businesses_map.municipality');

        $results = $query->get();




          //Results Array Convertion with Municipality Keys
            foreach($results as $result){
                $data_converted[$result->municipality] = array(
                    'count' => $result->count
                );
            }


        // This below is For Adding 0-s in Municipalities whitch don't have data results , and Municipality Matching

        foreach($cities as $city){
            $cities_converted[$city] = $city;
        }

        foreach($cities_converted as $city){
            if(isset($data_converted[$city])){
                $res[$city] = $data_converted[$city]['count'];
            }else{
                $res[$city]  = 0;
            }

        }

        // Only Counts without municipality names
        foreach($res as $r){
            $final_res[] = $r;
        }

        return $final_res;

    }

}
