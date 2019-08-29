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
    public function index() {

        $municipalities = Municipalities::all();
        $degrees = Degrees::all();
        $universities = Universities::all();
        $skills = Skills::all();

        foreach($universities as $university){
            $university_result[] = array(
                'uni_name' => $university->uni_name,
                'uni_id' => $university->id
            );
        }
        foreach($municipalities as $municipality){
            $municipality_result[] = $municipality->municipality;
        }
        foreach($degrees as $degree){
            $degrees_result[] = array(
                'degree_name' => $degree->degree_name,
                'degree_id' => $degree->id
            );
        }
        foreach($skills as $skill){
            $skills_result[] = array(
                'skill_name' => $skill->skill_name,
                'skill_id' => $skill->id
            );
        }
        $data = array(
            'cities' => $municipality_result,
            'universities' => $university_result,
            'degrees' => $degrees_result,
            'skills' => $skills_result
        );
        return view('client.work_force_map')->with('data',$data);
    }


    public function fetch_data()
    {

        $universities = Universities::all();

        foreach($universities as $university){
            $universities[] = $university->uni_name;
        }

        $data = [];
        echo json_encode(array($universities,$data));

    }

    public function grad_per_ict_dep_each_university(){

        $year_filter = $_GET['year'] ?? null;
        $degree_filter = $_GET['degree'] ?? null;
        $university_filter = $_GET['university'] ?? null;

        $universities = Universities::all();


        foreach($universities as $university){
            $universities_array[$university->id] = $university->uni_name;
            $universities_result[] = $university->uni_name;
        }

        if($university_filter != null && $university_filter != 'all'){
            $universities_array[] = $universities_array[$university_filter];
            $universities_result = array();
            $universities_result[] = $universities_array[$university_filter];
        }



        $genders = ['Male','Female'];

            foreach($genders as $gender){
                $data[] = array(
                    'name' => $gender,
                    'data' => $this->get_per_ict_dep_data($universities_result,$gender,$year_filter,$degree_filter,$university_filter)
                );
            }



        echo json_encode(array($universities_result,$data));
    }

    public function grad_students_per_skill_area(){
        $year_filter = $_GET['year'] ?? null;
        $skills_filter = $_GET['skills'] ?? null;

        $skills = Skills::all();


        foreach($skills as $skill){
            $skills_array[$skill->id] = $skill->skill_name;
            $skills_result[] = $skill->skill_name;
        }

        if($skills_filter != null && $skills_filter != ''){
            $skills_array[] = $skills_array[$skills_filter];
            $skills_result = array();
            $skills_result[] = $skills_array[$skills_filter];
        }



        $genders = ['Male','Female'];

        foreach($genders as $gender){
            $data[] = array(
                'name' => $gender,
                'data' => $this->get_per_skill_area($skills_result,$gender,$year_filter,$skills_filter)
            );
        }



        echo json_encode(array($universities_result,$data));
    }


    function get_per_ict_dep_data($universities,$gender = null,$year_filter,$degree_filter,$university_filter){
        if($degree_filter == null){
            $degree_filter = '1';
        }

        $query  = Graduates::query();

        $query = $query->select( DB::raw('sum(number_of_females) as female_count,sum(number_of_males) as male_count') , 'uni_name', 'degree_id');

        if($degree_filter != null){
            $query = $query->where('degree_id', '=', $degree_filter);
        }
        if($university_filter != null && $university_filter != 'all'){
            $query = $query->where('uni_id', '=', $university_filter);
        }
//
//        if($cities != null){
//            $cities_imploded = implode(',',$cities);
//            $query = $query->whereIn('municipality', $cities);
//        }
//
        if($year_filter != null &&  $year_filter != 'all'){
            $query = $query->where('year', '=', $year_filter);
        }
//        if($status != null &&  $status != 'Të gjitha'){
//            $query = $query->where('status', 'LIKE', '%' . $status . '%');
//        }

        $query = $query->join('universities','graduates.uni_id','=','universities.id');

        $query = $query->groupBy('uni_name');
        $query = $query->groupBy('graduates.degree_id');

        $results = $query->get();

        foreach($results as $result){
            $data_converted[$result->uni_name] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach($universities as $university){
            $universities_converted[$university] = $university;
        }

        foreach($universities_converted as $university){
            if(isset($data_converted[$university])){
                if($gender == 'Male'){
                    $res[$university] = $data_converted[$university]['count_male'];
                }
                elseif ($gender == 'Female'){
                    $res[$university] = $data_converted[$university]['count_female'];
                }

            }else{
                $res[$university]  = 0;
            }
        }

        // Only Counts without municipality names
        foreach($res as $r){
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_per_skill_area($skills,$gender = null,$year_filter,$skills_filter){
//        if($skills_filter == null){
//            $skills_filter = '1';
//        }

        foreach($skills as $s){
            $skill_ids[$this->get_skill_id($s)] = $s;
        }

        foreach($skill_ids as $key => $sk){
            $data_set[$sk] = array(
              'degrees' => $this->find_degrees($key)
            );
        }
        $degrees = Degrees::all();

        foreach($degrees as $degree){
            $general_skills = array(
              'degree_id' => $degree->id,
              'degree_name' => $degree->degree_name,
              'skills' => unserialize($degree->skills)
            );
        }


        foreach($general_skills['skills'] as $skill){
            $all_skills[$skill] = array(
              'skill_id' => $skill,
              'skill_name' => $skill_ids[$skill]
            );
        }

//        foreach($skills as $s){
//            if($s)
//        }
        $query  = Graduates::query();

        $query = $query->select( DB::raw('sum(number_of_females) as female_count,sum(number_of_males) as male_count') , 'degree_id','year');

//        if($degree_filter != null){
//            $query = $query->where('degree_id', '=', $degree_filter);
//        }
//        if($university_filter != null && $university_filter != 'all'){
//            $query = $query->where('uni_id', '=', $university_filter);
//        }
//
//        if($cities != null){
//            $cities_imploded = implode(',',$cities);
//            $query = $query->whereIn('municipality', $cities);
//        }
//
        if($year_filter != null &&  $year_filter != 'all'){
            $query = $query->where('year', '=', $year_filter);
        }
//        if($status != null &&  $status != 'Të gjitha'){
//            $query = $query->where('status', 'LIKE', '%' . $status . '%');
//        }

        $query = $query->join('degrees','graduates.degree_id','=','degrees.id');

        $query = $query->groupBy('graduates.degree_id');

        $results = $query->get();

        foreach($results as $result){
            $data_converted[$result->uni_name] = array(
                'count_male' => $result->male_count,
                'count_female' => $result->female_count
            );
        }

        foreach($universities as $university){
            $universities_converted[$university] = $university;
        }

        foreach($universities_converted as $university){
            if(isset($data_converted[$university])){
                if($gender == 'Male'){
                    $res[$university] = $data_converted[$university]['count_male'];
                }
                elseif ($gender == 'Female'){
                    $res[$university] = $data_converted[$university]['count_female'];
                }

            }else{
                $res[$university]  = 0;
            }
        }

        // Only Counts without municipality names
        foreach($res as $r){
            $final_res[] = $r;
        }

        return $final_res;
    }

    function get_skill_name($id){

        $result = Skills::find($id);


            $name = $result->skill_name;


        return $name;
    }

    function get_skill_id($name){

        $result = Skills::where('skill_name',$name)->get();

        foreach($result as $res){
            $id = $res->id;
        }


        return $id;
    }

}