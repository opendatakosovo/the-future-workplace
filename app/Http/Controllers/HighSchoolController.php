<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/1/2019
 * Time: 9:31 AM
 */

namespace App\Http\Controllers;

use App\Municipalities;
use App\Degrees;
use App\Universities;
use App\Skills;
class HighSchoolController extends Controller
{

    public function index(){
        $university_result = [];
        $degrees_result = [];
        $municipalities = Municipalities::all();
        $degrees =  Degrees::join('schools', function ($join) {
            $join->on('schools.id', '=', 'degrees.school_id')
                ->where('schools.is_high_school', '=', 1);
        })->get();
        $universities = Universities::where('is_high_school','=',1)->get();
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
            'cities' => $municipality_result,
            'universities' => $university_result,
            'degrees' => $degrees_result,
            'skills' => $skills_result
        );

        return view('client.highschool')->with('data',$data);
    }
}