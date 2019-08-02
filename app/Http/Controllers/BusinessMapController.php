<?php


namespace App\Http\Controllers;


use App\Business_ActivitiesModel;
use App\businesses_map;
use Illuminate\Support\Facades\DB;

class BusinessMapController extends Controller
{
    public function index()
    {
        return view('client.business_map');
    }


    public function fetch_data()
    {
        $bussiness_result = businesses_map::all();
        $activities = Business_ActivitiesModel::all();

        $cities = [];
        $activities_array = [];

        foreach ($bussiness_result as $business) {
            if(!in_array($business->municipality,$cities)){
                $cities[] = $business->municipality;
            }
        }

        foreach ($activities as $activity) {
            $activities_array[] = $activity->activity_name;
        }



            foreach($activities_array as $activity){
                $data[] = array(
                  'name' => $activity,
                  'data' =>  $this->get_col_data($activity,$cities)
                );
            }


        echo json_encode(array($cities,$data));

    }

    public function get_col_data($activity,$cities)
    {
        $res = [];
        $cities_converted = [];
        $data_converted = [];
        $final_res = [];

        //Results from the database
        $results = DB::table('businesses_map')
                ->select( DB::raw('COUNT(municipality) as count') , 'municipality')
                ->where('activities', 'LIKE', '%' . $activity . '%')
                ->groupBy('businesses_map.municipality')
                ->get();

            //Cities
            foreach($cities as $city){
                $cities_converted[$city] = $city;
            }


          //Results Array Convertion with Municipality Keys
            foreach($results as $result){
                $data_converted[$result->municipality] = array(
                    'count' => $result->count
                );
            }


        // This below is For Adding 0-s in Municipalities whitch don't have data results , and Municipality Matching

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
