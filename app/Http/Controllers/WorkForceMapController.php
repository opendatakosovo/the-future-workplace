<?php


namespace App\Http\Controllers;

use App\Graduates;
use App\Municipalities;
use App\Degrees;
use App\Universities;
use App\Skills;
use Illuminate\Support\Facades\DB;

class WorkForceMapController extends Controller
{
    public function index()
    {

        $municipalities = Municipalities::all();
        $degrees = Degrees::all();
        $universities = Universities::all();
        $skills = Skills::all();

        foreach ($universities as $university) {
            $university_result[] = array(
                'uni_name' => $university->school_name,
                'uni_id' => $university->id
            );
        }
        foreach ($municipalities as $municipality) {
            $municipality_result[] = $municipality->municipality;
        }
        foreach ($degrees as $degree) {
            $degrees_result[] = array(
                'degree_name' => $degree->degree_name,
                'degree_id' => $degree->id
            );
        }
        foreach ($skills as $skill) {
            $skills_result[] = array(
                'skill_name' => $skill->skill_name,
                'skill_id' => $skill->id
            );
        }


        $data = array(
            'cities' => (isset($municipality_result)) ? $municipality_result : null,
            'universities' => $university_result,
            'degrees' => $degrees_result,
            'skills' => $skills_result
        );
        return view('client.work_force_map')->with('data', $data);
    }


    public function fetch_data()
    {

        $universities = Universities::all();

        foreach ($universities as $university) {
            $universities[] = $university->school_name;
        }

        $data = [];
        echo json_encode(array($universities, $data));

    }

    public function grad_per_ict_dep_each_university()
    {

        $year_filter = $_GET['year'] ?? null;
        $degree_filter = $_GET['degree'] ?? null;
        $university_filter = $_GET['university'] ?? null;

        if(isset($_GET['highschool']) && $_GET['highschool'] == 'true'){
            $is_high_school = 1;
        }
        else{
            $is_high_school = 0;
        }
        $universities = Universities::where('is_high_school',$is_high_school)->get();


        foreach ($universities as $university) {
            $universities_array[$university->id] = $university->school_name;
            $universities_result[] = $university->school_name;
        }

        if ($university_filter != null && $university_filter != 'all') {
            $universities_array[] = $universities_array[$university_filter];
            $universities_result = array();
            $universities_result[] = $universities_array[$university_filter];
        }


        $genders = ['Male', 'Female'];

        foreach ($genders as $gender) {
            $data[] = array(
                'name' => $gender,
                'data' => $this->get_per_ict_dep_data($universities_result, $gender, $year_filter, $degree_filter, $university_filter,$is_high_school)
            );
        }


        echo json_encode(array($universities_result, $data));
    }

    public function grad_students_per_skill_area()
    {
        $year_filter = $_GET['year'] ?? null;
        $skills_filter = $_GET['skills'] ?? null;

        $skills = Skills::all();

        if(isset($_GET['highschool']) && $_GET['highschool'] == 'true'){
            $is_high_school = 1;
        }
        else{
            $is_high_school = 0;
        }

        foreach ($skills as $skill) {
            $skills_array[$skill->id] = $skill->skill_name;
            $skills_result[] = $skill->skill_name;
        }

        if ($skills_filter != null && $skills_filter != '') {
            $skills_array[] = $skills_array[$skills_filter];
            $skills_result = array();
            $skills_result[] = $skills_array[$skills_filter];
        }


        $genders = ['Male', 'Female'];

        foreach ($genders as $gender) {
            $data[] = array(
                'name' => $gender,
                'data' => $this->get_per_skill_area($skills_result, $gender, $year_filter, $skills_filter,$is_high_school)
            );
        }


        echo json_encode(array($skills_result, $data));
    }

    public function get_ict_per_year(){

        $year_filter = $_GET['year'] ?? null;
        $skills_filter = $_GET['skills'] ?? null;

        $skills = Skills::all();


        foreach ($skills as $skill) {
            $skills_array[$skill->id] = $skill->skill_name;
            $skills_result[] = $skill->skill_name;
        }

        if ($skills_filter != null && $skills_filter != '') {
            $skills_array[] = $skills_array[$skills_filter];
            $skills_result = array();
            $skills_result[] = $skills_array[$skills_filter];
        }

        for($i = 2008; $i < 2019; $i++){
            $years_result[] = $i;
        }

        $data = [];
        foreach ($skills_array as $skill) {
            $data[] = array(
                'name' => $skill,
                'data' => $this->get_ict_per_year_data($skills_array,$years_result)
            );
        }


        echo json_encode(array($years_result, $data));
    }

    public function get_aggregate_supply(){

        $year_filter = $_GET['year'] ?? null;
        $skills_filter = $_GET['skills'] ?? null;

        $skills = Skills::all();


        foreach ($skills as $skill) {
            $skills_array[$skill->id] = $skill->skill_name;
            $skills_result[] = $skill->skill_name;
        }

        if ($skills_filter != null && $skills_filter != '') {
            $skills_array[] = $skills_array[$skills_filter];
            $skills_result = array();
            $skills_result[] = $skills_array[$skills_filter];
        }

        for($i = 2008; $i < 2019; $i++){
            $years_result[] = $i;
        }

        $data = [];
        foreach ($skills_array as $skill) {
            $data[] = array(
                'name' => $skill,
                'data' => $this->aggregate_suply_data($skills_array,$years_result)
            );
        }


        echo json_encode(array($years_result, $data));
    }

    function aggregate_suply_data($skills,$years){

//        if($skills_filter == null){
//            $skills_filter = '1';
//        }
        $gender = 'All';
        foreach ($skills as $key => $s) {
            $skill_ids[] = $key;
        }


        $query = Graduates::query();

        $query = $query->select(DB::raw(' sum(number_of_graduates) as sum_grads ,sum(number_of_males) male_count,sum(number_of_females)as female_count'), 'year','skill_id');

//            $cities_imploded = implode(',',$cities);

        $query = $query->join('degrees', 'graduates.degree_id', '=', 'degrees.id');
        $query = $query->join('skills_degrees', 'skills_degrees.degree_id', '=', 'degrees.id');

        $query = $query->whereIn('skill_id', $skill_ids);

//
//            if ($year_filter != null && $year_filter != 'all') {
//                $query = $query->where('year', '=', $year_filter);
//            }

        $query = $query->groupBy('skill_id');
        $query = $query->groupBy('graduates.year');
        $results = $query->get();


        foreach ($results as $result) {

            $data_converted[$result->year] = array(
                'count_graduates' => $result->sum_grads,
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
                else{
                    $res[$year] = $data_converted[$year]['count_graduates'];
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

    function get_per_ict_dep_data($universities, $gender = null, $year_filter, $degree_filter, $university_filter,$is_high_school)
    {
        if ($degree_filter == null) {
            $degree_filter = '1';
        }

        $query = Graduates::query();

        $query = $query->select(DB::raw('sum(number_of_females) as female_count,sum(number_of_males) as male_count'), 'school_name', 'degree_id');

        if ($degree_filter != null) {
            $query = $query->where('degree_id', '=', $degree_filter);
        }
        if ($university_filter != null && $university_filter != 'all') {
            $query = $query->where('school_id', '=', $university_filter);
        }
//
//        if($cities != null){
//            $cities_imploded = implode(',',$cities);
//            $query = $query->whereIn('municipality', $cities);
//        }
//
        if ($year_filter != null && $year_filter != 'all') {
            $query = $query->where('year', '=', $year_filter);
        }
//        if($status != null &&  $status != 'Të gjitha'){
//            $query = $query->where('status', 'LIKE', '%' . $status . '%');
//        }

        $query = $query->join('schools', 'graduates.school_id', '=', 'schools.id');
        if($is_high_school == 1){
            $query = $query->where('schools.is_high_school', '=', 1);
            $query = $query->where('graduates.school_id', '!=', 0);
        }

        $query = $query->groupBy('school_name');
        $query = $query->groupBy('graduates.degree_id');

        $results = $query->get();

        foreach ($results as $result) {
            $data_converted[$result->school_name] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach ($universities as $university) {
            $universities_converted[$university] = $university;
        }

        foreach ($universities_converted as $university) {
            if (isset($data_converted[$university])) {
                if ($gender == 'Male') {
                    $res[$university] = $data_converted[$university]['count_male'];
                } elseif ($gender == 'Female') {
                    $res[$university] = $data_converted[$university]['count_female'];
                }

            } else {
                $res[$university] = 0;
            }
        }

        // Only Counts without municipality names
        foreach ($res as $r) {
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_per_skill_area($skills, $gender = null, $year_filter, $skills_filter,$is_high_school)
    {
//        if($skills_filter == null){
//            $skills_filter = '1';
//        }

                foreach ($skills as $s) {
        //            $skill_ids[$this->get_skill_id($s)] = $s;
                    $skill_ids[] = $this->get_skill_id($s);
                }

                    $query = Graduates::query();

                    $query = $query->select(DB::raw('sum(number_of_females) as female_count,sum(number_of_males) as male_count'), 'graduates.degree_id','skill_id');

//                  $cities_imploded = implode(',',$cities);

                    $query = $query->join('degrees', 'graduates.degree_id', '=', 'degrees.id');
                    $query = $query->join('schools', 'degrees.school_id', '=', 'schools.id');
                    $query = $query->join('skills_degrees', 'skills_degrees.degree_id', '=', 'degrees.id');

                    if($is_high_school == 1){
                        $query = $query->where('is_high_school', '=', 1);
                    }else{
                        $query = $query->where('is_high_school', '=', 0);
                    }
                    $query = $query->whereIn('skill_id', $skill_ids);

//
                    if ($year_filter != null && $year_filter != 'all') {
                        $query = $query->where('year', '=', $year_filter);
                    }

                    $query = $query->groupBy('skill_id');
                    $query = $query->groupBy('graduates.school_id');
                    $results = $query->get();


        foreach ($results as $result) {


            $data_converted[$result->skill_id] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach ($skill_ids as $skill) {
            $skills_converted[$skill] = $skill;
        }

        foreach ($skills_converted as $skill) {
            if (isset($data_converted[$skill])) {
                if ($gender == 'Male') {
                    $res[$skill] = $data_converted[$skill]['count_male'];
                } elseif ($gender == 'Female') {
                    $res[$skill] = $data_converted[$skill]['count_female'];
                }

            } else {
                $res[$skill] = 0;
            }
        }




        foreach ($res as $r) {
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_skill_name($id)
    {

        $result = Skills::find($id);


        $name = $result->skill_name;


        return $name;
    }

    function get_skill_id($name)
    {

        $result = Skills::where('skill_name', $name)->get();

        foreach ($result as $res) {
            $id = $res->id;
        }


        return $id;
    }


    function find_degrees($skill_id)
    {

        $degrees = Degrees::all();
        $degree_ids = [];
        foreach ($degrees as $degree) {
            $general_skills = array(
                'degree_id' => $degree->id,
                'degree_name' => $degree->degree_name,
                'skills' => unserialize($degree->skills)
            );
            if (in_array($skill_id, $general_skills['skills'])) {
                $degree_ids = $degree->id;
            }else{
                $degree_ids = 0;
            }
        }

        return $degree_ids;
    }

    function get_ict_per_year_data($skills,$years){

//        if($skills_filter == null){
//            $skills_filter = '1';
//        }
            $gender = 'All';
            foreach ($skills as $key => $s) {
                $skill_ids[] = $key;
            }


            $query = Graduates::query();

            $query = $query->select(DB::raw(' sum(number_of_graduates) as sum_grads ,sum(number_of_males) male_count,sum(number_of_females)as female_count'), 'year','skill_id');

//            $cities_imploded = implode(',',$cities);

            $query = $query->join('degrees', 'graduates.degree_id', '=', 'degrees.id');
            $query = $query->join('skills_degrees', 'skills_degrees.degree_id', '=', 'degrees.id');

            $query = $query->whereIn('skill_id', $skill_ids);

//
//            if ($year_filter != null && $year_filter != 'all') {
//                $query = $query->where('year', '=', $year_filter);
//            }

            $query = $query->groupBy('skill_id');
            $query = $query->groupBy('graduates.year');
            $results = $query->get();


            foreach ($results as $result) {

                $data_converted[$result->year] = array(
                    'count_graduates' => $result->sum_grads,
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
                    else{
                        $res[$year] = $data_converted[$year]['count_graduates'];
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

}