<?php


namespace App\Http\Controllers;


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
        $column = ['publishing_of_computer_games', 'computer_programming_activities', 'computer_consultancy_activities', 'computer_facilities_management_activities', 'information_technology_and_computer_service', 'wired_telecommunications_activities', 'wireless_telecommunication_activities', 'satellite_telecommunication_activities', 'other_telecommunication_activities', 'other_software_publishing', 'data_processing_hosting_and_related_activities'];

        $cities = [];

        foreach ($bussiness_result as $business) {
            $cities[] = $business->municipality;
        }


            foreach ($column as $col) {
                $data[] = array(
                    'name' => ucfirst(str_replace('_',' ',$col)),
                    'data' => trim('[['.implode(',',$this->get_col_data($col)).']]')
                );
            }

            $string = json_encode($data);
            $res_data =preg_replace('/"\[(.*?)\]"/','$1',$string);

        echo json_encode(array($cities,$res_data));

    }

    public function get_col_data($col)
    {
        $results = businesses_map::select($col)->get();

        foreach ($results as $result) {
            $res[] = $result->$col;
        }

        return $res;

    }

}