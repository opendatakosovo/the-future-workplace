<?php

namespace App\Http\Controllers;

use App\businesses_map;
use Illuminate\Http\Request;
use App\Graduates;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

        $total_graduated = $this->get_total_grads();
        $total_graduated_uni = $this->get_total_grads_uni();
        $total_biz = $this->get_total_biz();
        $growth = $this->get_growth_ict();
        $growth_uni = $this->get_growth_ict('uni');
        $growth_biz = $this->get_growth_biz();
        $number_of_bussinesses = $this->get_no_bussiness();
        $number_of_active = $this->get_no_bussiness('active');
        $number_of_disolved = $this->get_no_bussiness('dissolved');


        $data = array(
            'total_graduated' => $total_graduated,
            'total_graduated_uni' => $total_graduated_uni,
            'total_biz' => $total_biz,
            'growth' => $growth,
            'growth_uni' => $growth_uni,
            'number_of_bussinesses' => $number_of_bussinesses,
            'number_of_active' => $number_of_active,
            'number_of_dissolved' => $number_of_disolved,
            'growth_biz' => $growth_biz
        );
        return view('client.stats')->with('data', $data);
    }


    public function grads_ict()
    {

        for ($i = 2015; $i < 2019; $i++) {
            $years_result[] = $i;
        }

        $data = [];
        $genders = ['Male', 'Female'];
        foreach ($genders as $gender) {
            $data[] = array(
                'name' => $gender,
                'data' => $this->get_grads_ict($gender, $years_result)
            );
        }


        echo json_encode(array($years_result, $data));
    }

    public function grads_ict_uni()
    {


        for ($i = 2011; $i < 2016; $i++) {
            $years_result[] = $i;
        }

        $data = [];
        $genders = ['Male', 'Female'];
        foreach ($genders as $gender) {
            $data[] = array(
                'name' => $gender,
                'data' => $this->get_grads_ict_uni($gender, $years_result)
            );
        }


        echo json_encode(array($years_result, $data));
    }

    public function number_businnesses()
    {
        for ($i = 2008; $i < 2019; $i++) {
            $years_result[] = $i;
        }

        $data = [];

        $data[] = array(
            'name' => 'Total',
            'data' => $this->get_count_businness($years_result)
        );


        echo json_encode(array($years_result, $data));
    }

    function get_count_businness($years)
    {

        $data = [];
        foreach ($years as $year) {
            $query = businesses_map::query();

            $query = $query->select(DB::raw('count(id) as total', 'date_of_registration'));

            $query = $query->where('date_of_registration', 'like', '%/' . $year . '%');

            $results = $query->get();
            foreach ($results as $result) {
                $data[] = $result->total;
            }
        }

        return $data;


    }

    function get_grads_ict($gender, $years)
    {

        $query = Graduates::query();

        $query = $query->select(DB::raw(' sum(number_of_males) male_count,sum(number_of_females)as female_count'), 'year');


        $query = $query->groupBy('graduates.year');
        $results = $query->get();


        foreach ($results as $result) {

            $data_converted[$result->year] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach ($years as $year) {
            $years_converted[$year] = $year;
        }

        foreach ($years_converted as $year) {
            if (isset($data_converted[$year])) {
                if ($gender == 'Male') {
                    $res[$year] = $data_converted[$year]['count_male'];
                } elseif ($gender == 'Female') {
                    $res[$year] = $data_converted[$year]['count_female'];
                }

            } else {
                $res[$year] = 0;
            }
        }


        foreach ($res as $r) {
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_grads_ict_uni($gender, $years)
    {

        $query = Graduates::query();

        $query = $query->select(DB::raw(' sum(number_of_males) male_count,sum(number_of_females)as female_count'), 'year');
        $query = $query->join('schools', 'schools.id', '=', 'graduates.school_id');
        $query = $query->where('is_high_school', '=', '0');
        $query = $query->groupBy('graduates.year');
        $results = $query->get();


        foreach ($results as $result) {

            $data_converted[$result->year] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach ($years as $year) {
            $years_converted[$year] = $year;
        }

        foreach ($years_converted as $year) {
            if (isset($data_converted[$year])) {
                if ($gender == 'Male') {
                    $res[$year] = $data_converted[$year]['count_male'];
                } elseif ($gender == 'Female') {
                    $res[$year] = $data_converted[$year]['count_female'];
                }

            } else {
                $res[$year] = 0;
            }
        }


        foreach ($res as $r) {
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_growth_ict($type = null)
    {
        $min_year_grads = $this->get_grads('min',$type);
        $max_year_grads = $this->get_grads('max',$type);

        if($min_year_grads >0){
            $result = ($max_year_grads - $min_year_grads) / $min_year_grads;
            $result = round((float)$result * 100);
        }else{
            $result = 0;
        }
        return $result;
    }

    function get_growth_biz()
    {
        $min_year_grads = $this->get_biz('min');
        $max_year_grads = $this->get_biz('max');

        if($min_year_grads != 0){
            $result = ($max_year_grads - $min_year_grads) / $min_year_grads;
            $result = round((float)$result * 100);
        }else{
            $result = 0;
        }

        return $result;
    }

    function get_biz($type = null)
    {
        if ($type == 'min') {
            $query = businesses_map::query();

            $query = $query->select(DB::raw(' count(id) as total'));

            $query = $query->where('date_of_registration', 'like', '%2008%');

            $results = $query->get();
        } else {
            $query = businesses_map::query();

            $query = $query->select(DB::raw(' count(id) total'));

            $query = $query->where('date_of_registration', 'like', '%2018%');
            $results = $query->get();
        }

        foreach ($results as $result) {
            $number = $result->total;
        }
        return $number;
    }

    function get_grads($type,$school_type)
    {
        if($school_type == 'uni'){
            $year_min = 2011;
            $year_max = 2015;
        }else{
            $year_min = 2015;
            $year_max = 2018;
        }
        if ($type == 'min') {


            $query = Graduates::query();

            $query = $query->select(DB::raw(' sum(number_of_graduates) total'));
            if($school_type == 'uni'){
                $query = $query->join('schools','schools.id','=','graduates.school_id');
                $query = $query->where('is_high_school', '=', 0);
            }else{
                $query = $query->join('schools','schools.id','=','graduates.school_id');
                $query = $query->where('is_high_school', '=', 1);
            }
            $query = $query->where('year', '=', $year_min);
            $results = $query->get();
        } else {
            $query = Graduates::query();

            $query = $query->select(DB::raw(' sum(number_of_graduates) total'));
            if($school_type == 'uni'){
                $query = $query->join('schools','schools.id','=','graduates.school_id');
                $query = $query->where('is_high_school', '=', 0);
            }else{
                $query = $query->join('schools','schools.id','=','graduates.school_id');
                $query = $query->where('is_high_school', '=', 1);
            }
            $query = $query->where('year', '=', $year_max);
            $results = $query->get();
        }

        foreach ($results as $result) {
            $number = $result->total;
        }
        return $number;
    }

    function get_no_bussiness($type = null)
    {

        if ($type == 'active') {
            $query = businesses_map::query();

            $query = $query->select(DB::raw(' count(*) total'));

            $query = $query->where('date_of_registration', 'like', '%2018%');
            $query = $query->where('status', 'like', 'Active');
            $results = $query->get();

            foreach ($results as $res) {
                $number = $res->total;
            }
        } elseif ($type == 'dissolved') {
            $query = businesses_map::query();

            $query = $query->select(DB::raw(' count(*) total'));

            $query = $query->where('date_of_registration', 'like', '%2018%');
            $query = $query->where('status', 'like', 'Dissolved');
            $results = $query->get();

            foreach ($results as $res) {
                $number = $res->total;
            }
        } else {
            $query = businesses_map::query();

            $query = $query->select(DB::raw(' count(*) total'));

            $query = $query->where('date_of_registration', 'like', '%2018%');
            $results = $query->get();

            foreach ($results as $res) {
                $number = $res->total;
            }
        }

        return $number;
    }

    function get_total_grads()
    {
        $query = Graduates::query();
        $query = $query->select(DB::raw(' sum(number_of_graduates) as total'));
        $query = $query->join('schools','schools.id','=','graduates.school_id');
        $query = $query->where('is_high_school','=','1');
        $results = $query->get();

        foreach ($results as $result) {
            $total_graduated = $result->total;
        }
        return $total_graduated;
    }

    function get_total_grads_uni()
    {
        $query = Graduates::query();
        $query = $query->select(DB::raw(' sum(number_of_graduates) as total'));
        $query = $query->join('schools','schools.id','=','graduates.school_id');
        $query = $query->where('is_high_school','=','0');
        $results = $query->get();

        foreach ($results as $result) {
            $total_graduated = $result->total;
        }
        return $total_graduated;
    }

    function get_total_biz()
    {
        $query = businesses_map::query();
        $query = $query->select(DB::raw(' count(id) as total'));
        $results = $query->get();

        foreach ($results as $result) {
            $total_graduated = $result->total;
        }
        return $total_graduated;
    }
}
