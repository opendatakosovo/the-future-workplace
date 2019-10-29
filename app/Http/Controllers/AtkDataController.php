<?php

namespace App\Http\Controllers;

use App\Atk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AtkDataController extends Controller
{
    public function index(){

        return view('client.atk');
    }

    public function get_number_atk_categories(){



    }


    public function fetch_data()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

         $query  = Atk::query();

        $query = $query->select( DB::raw('distinct kategoria , sum(nr_kompanive) as num_count'));


        $query = $query->groupBy('kategoria');

        $atk_counted_categories = $query->get();

        foreach($atk_counted_categories as $category){
            $categories[] = $category->kategoria;
            $atk_data[$category->kategoria] = $category->num_count;
        }



//        foreach($atk_data as $counti){
//            $final_res[] = $counti;
//        }


        foreach($atk_data as $category => $count){
            $categoriess[] = $category;
            $final_res[] = $count;
        }


        foreach ($categoriess as $c){
            if($c == 'DERI 50000'){
                $categories_renamed[] = '0 - 50K';
            }
            elseif ($c == 'MBI 10000000'){
                $categories_renamed[] = '1M<';
            }
            elseif ($c == 'MES 100000 - 250000'){
                $categories_renamed[] = '100K - 250K';
            }
            elseif ($c == 'MES 250000 - 500000'){
                $categories_renamed[] = '250K - 500K';
            }
            elseif ($c == 'MES 50000 - 100000'){
                $categories_renamed[] = '50K - 100K';
            }
            elseif ($c == 'MES 500000 - 1000000'){
                $categories_renamed[] = '500K - 1M';
            }
        }

            $data[] = array(
                'name' => 'Total',
                'data' =>  $final_res
            );


        echo json_encode(array($categories_renamed,$data));

    }

    public function fetch_data2()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

        $query  = Atk::query();

        $query = $query->select( DB::raw('distinct kategoria , sum(nr_puntoreve_ne_kompani) as emp_count'));

        $query = $query->groupBy('kategoria');

        $atk_counted_categories = $query->get();

        foreach($atk_counted_categories as $category){
            $categories[] = $category->kategoria;
            $atk_data[$category->kategoria] = $category->emp_count;
        }



        foreach($atk_data as $category => $count){
            $categoriess[] = $category;
            $final_res[] = round($count);
        }



            $data[] = array(
                'name' => 'Total',
                'data' =>  $final_res
            );


        echo json_encode(array($categories,$data));

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
