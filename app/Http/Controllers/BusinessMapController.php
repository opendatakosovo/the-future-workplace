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
        $default_cities  = ['Pristina', 'Prizren', 'Peja', 'Gjakova', 'Mitrovica', 'Gjilan'];

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
            'activities' => $activities_result,
            'def_cities' => $default_cities
        );

        return view('client.company_data')->with('data',$data);
    }


    public function fetch_data()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

        $activities_array = [];

        if($cities == null){
            $default_cities  = ['Pristina', 'Prizren', 'Peja', 'Gjakova', 'Mitrovica', 'Gjilan'];
            $cities_imploded  = implode(',',$default_cities);

            $bussiness_result = businesses_map::whereIn('municipality',$default_cities)->get();


        }else{
            $bussiness_result = businesses_map::whereIn('municipality',$cities)->get();

        }


        $activities = Business_ActivitiesModel::all();



        if($cities == null){
            $cities = [];
            foreach ($bussiness_result as $business) {
                if(!in_array($business->municipality,$cities)){
                    $cities[] = $business->municipality;
                }
            }

//            if(Cache::store('apc')->get('_cities')){
//                $cities =   Cache::store('apc')->get('_cities');
//            }else{
//                foreach ($bussiness_result as $business) {
//                    if(!in_array($business->municipality,$cities)){
//                        $cities[] = $business->municipality;
//                    }
//                }
//                Cache::store('apc')->put('_cities', $cities, 10000);
//            }
        }


        if($activity == null  || $activity == 'all'){
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

        if($activity != null && $activity != 'all'){
            $query = $query->where('activities', 'LIKE', '%' . $activity . '%');
        }

        if($cities != null){
            $cities_imploded = implode(',',$cities);
            $query = $query->whereIn('municipality', $cities);
        }

        if($year != null &&  $year != 'all'){
            $query = $query->where('date_of_registration', 'LIKE', '%' . $year . '%');
        }
        if($status != null &&  $status != 'all'){
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


        // This below is For Adding 0-s in Municipalities which don't have data results , and Municipality Matching

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
