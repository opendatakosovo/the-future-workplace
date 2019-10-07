<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/5/2019
 * Time: 4:31 PM
 */

namespace App\Http\Controllers;


use App\Graduates;
use App\Skills;
use App\Surveys;
use Illuminate\Support\Facades\DB;
class SkillsMismatchController extends Controller
{

    public function index(){


        return view('client.mismatch');
    }


    public function fetch_data()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

        $activities_array = [];

//        if($cities == null){
//            $default_cities  = ['Pristina', 'Prizren', 'Peja', 'Gjakova', 'Mitrovica', 'Gjilan'];
//            $cities_imploded  = implode(',',$default_cities);
//
//            $bussiness_result = businesses_map::whereIn('municipality',$default_cities)->get();
////
////            if(Cache::store('apc')->get('_business_result_'.$cities_imploded)){
////                $bussiness_result =   Cache::store('apc')->get('_business_result_'.$cities_imploded);
////            }else{
////                $bussiness_result = businesses_map::whereIn('municipality',$default_cities)->get();
////                Cache::store('apc')->put('_business_result_'.$cities_imploded, $bussiness_result, 10000);
////            }
//
//        }else{
//            $bussiness_result = businesses_map::whereIn('municipality',$cities)->get();
////            if(Cache::store('apc')->get('_business_result_'.implode(',',$cities))){
////                $bussiness_result =   Cache::store('apc')->get('_business_result_'.implode(',',$cities));
////            }else{
////                $bussiness_result = businesses_map::whereIn('municipality',$cities)->get();
////                Cache::store('apc')->put('_business_result_'.implode(',',$cities), $bussiness_result, 10000);
////            }
//        }


        $skills = Skills::all();


//
//        if($cities == null){
//            $cities = [];
//            foreach ($bussiness_result as $business) {
//                if(!in_array($business->municipality,$cities)){
//                    $cities[] = $business->municipality;
//                }
//            }

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
//        }

//
//        if($activity == null  || $activity == 'all'){
//            foreach ($activities as $activity) {
//                $activities_array[] = $activity->activity_name;
//            }
//        }else{
//            $activities_array[] = $activity;
//        }

        foreach ($skills as $skill) {
            $skills_array[] = $skill->skill_name;

        }
        $categories = ['Supply', 'Demand'];
        foreach($categories as $category){
            $data[] = array(
                'name' => $category,
                'data' =>  $this->get_col_data($skills,$category)
            );
        }


        echo json_encode(array($skills_array,$data));

    }

    function get_col_data($skills,$category){
        $totalSurveys = Surveys::count();
        $totalGrads = Graduates::sum('number_of_graduates');
        if($category == 'Supply'){
            foreach ($skills as $skill){
                $query  = Graduates::query();
                $query = $query->select( DB::raw('sum(number_of_graduates) as sum'));
                $query = $query->join('degrees', 'degrees.id', '=', 'graduates.degree_id');
                $query = $query->where('skills', 'LIKE', '%"' . $skill->skill_name . '"%');
                $results = $query->get();

                //Results Array Convertion with Municipality Keys
                foreach($results as $result){
                    $data_counted = $result->sum;
                }

                $res = $data_counted / $totalGrads;
                if($res == 1){
                    $res = 100;
                }else{
                    $res =  round((float)$res * 100 );
                }
                $calculate[]  = $res;
            }

            return $calculate;
        }else{
            foreach ($skills as $skill){
                $query  = Surveys::query();
                $query = $query->select( DB::raw('COUNT(*) as count'));
                $query = $query->where('skills', 'LIKE', '%"' . $skill->skill_name . '"%');
                $results = $query->get();

                //Results Array Convertion with Municipality Keys
                foreach($results as $result){
                    $data_counted = $result->count;
                }
                $res = $data_counted / $totalSurveys;
                if($res == 1){
                    $res = 100;
                }else{
                    $res = round((float)$res * 100 );
                }
                $calculate[]  = $res;
            }
            return $calculate;

        }





    }
}