<?php


namespace App\Http\Controllers;

use App\Municipalities;
use App\Degrees;

class WorkForceMapController extends Controller
{
    public function index() {

        $municipalities = Municipalities::all();
        $degrees = Degrees::all();
        foreach($municipalities as $municipality){
            $municipality_result[] = $municipality->municipality;
        }
        foreach($degrees as $degree){
            $degrees_result[] = $degree->degree_name;
        }
        $data = array(
            'cities' => $municipality_result,
            'degrees' => $degrees_result
        );
        return view('client.work_force_map')->with('data',$data);
    }


    public function fetch_data()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $degree = $_GET['degree'] ?? null;

        $degrees_array = [];

        if($cities == null){
            $default_cities  = ['Pristina', 'Prizren', 'Peja', 'Gjakova', 'Mitrovica', 'Gjilan'];

            $cities_imploded  = implode(',',$default_cities);
            if(Cache::store('apc')->get('_business_result_'.$cities_imploded)){
                $bussiness_result =   Cache::store('apc')->get('_business_result_'.$cities_imploded);
            }else{
                $bussiness_result = businesses_map::whereIn('municipality',$default_cities)->get();
                Cache::store('apc')->put('_business_result_'.$cities_imploded, $bussiness_result, 10000);
            }

        }else{
            if(Cache::store('apc')->get('_business_result_'.implode(',',$cities))){
                $bussiness_result =   Cache::store('apc')->get('_business_result_'.implode(',',$cities));
            }else{
                $bussiness_result = businesses_map::whereIn('municipality',$cities)->get();
                Cache::store('apc')->put('_business_result_'.implode(',',$cities), $bussiness_result, 10000);
            }
        }


        $degrees = Degrees::all();



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




        if($degree == null  || $degree == 'Të gjitha'){
            foreach ($degrees as $degree) {
                $degrees_array[] = $degree->degree_name;
            }
        }else{
            $degrees_array[] = $degree;
        }

        foreach($degrees_array as $degree){
            $data[] = array(
                'name' => $degree,
                'data' =>  $this->get_col_data($cities,$year,$degree)
            );
        }


        echo json_encode(array($cities,$data));

    }

}