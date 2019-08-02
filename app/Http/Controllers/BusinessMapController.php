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



//        $column = ['publishing_of_computer_games', 'computer_programming_activities', 'computer_consultancy_activities', 'computer_facilities_management_activities', 'information_technology_and_computer_service', 'wired_telecommunications_activities', 'wireless_telecommunication_activities', 'satellite_telecommunication_activities', 'other_telecommunication_activities', 'other_software_publishing', 'data_processing_hosting_and_related_activities'];
//
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
//
    }

    public function get_col_data($activity,$cities)
    {
        $res = [];
        $cities_converted = [];
        $data_converted = [];
        $final_res = [];

        $results = DB::table('businesses_map')
                ->select( DB::raw('COUNT(municipality) as count') , 'municipality')
                ->where('activities', 'LIKE', '%' . $activity . '%')
                ->groupBy('businesses_map.municipality')
                ->get();


            foreach($cities as $city){
                $cities_converted[$city] = $city;
            }



            foreach($results as $result){
                $data_converted[$result->municipality] = array(
                    'count' => $result->count
                );
            }

//            foreach($cities_converted as $city){
//               foreach($results as $result){
//                   if($result->municipality == $city){
//                       $res[] = $result->count;
//                   }else{
//                       $res[] = $result->count;
//                   }
//               }
//            }

        foreach($cities_converted as $city){
            if(isset($data_converted[$city])){
                $res[$city] = $data_converted[$city]['count'];
            }else{
                $res[$city]  = 0;
            }

        }
//                foreach ($results as $result) {
//                    if(in_array($result->municipality , $cities_converted )){
//                        $res[] = $result->count;
//                    }else{
//                        $res[] = 0;
//                    }
//
//                }

        foreach($res as $r){
            $final_res[] = $r;
        }

        return $final_res;

    }

}