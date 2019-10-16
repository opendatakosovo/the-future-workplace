<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/14/2019
 * Time: 11:21 AM
 */


function get_skill_name($id){

    $name = \App\Skills::find($id);
    if($name){
        return $name->skill_name;
    }

}

function get_skill_names($skills_array){
    $skills_res = [];
    $skills_array = explode(',',$skills_array);
    foreach ($skills_array as $skill){
        $name = \App\Skills::find($skill);
        if($name){
            $skills_res[] = $name->skill_name;
        }

    }

    return implode(',',$skills_res);
}

function get_skills(){

    $skills = \App\Skills::all();

    foreach($skills as $skill){
        $skill_names[] = $skill->skill_name;
    }

    return json_encode($skill_names);
}

function get_current_url(){
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    return $page = end($link_array);
}