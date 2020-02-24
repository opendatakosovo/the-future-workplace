<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/14/2019
 * Time: 11:21 AM
 */


function get_skill_name($id)
{

    $name = \App\Skills::find($id);
    if ($name) {
        return $name->skill_name;
    }

}

function get_skill_names($skills_array)
{
    $skills_res = [];
    $skills_array = explode(',', $skills_array);
    foreach ($skills_array as $skill) {
        $name = \App\Skills::find($skill);
        if ($name) {
            $skills_res[] = $name->skill_name;
        }

    }

    return implode(',', $skills_res);
}

function get_skills()
{

    $skills = \App\Skills::all();

    foreach ($skills as $skill) {
        $skill_names[] = $skill->skill_name;
    }

    return json_encode($skill_names);
}

function get_current_url()
{
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/', $link);
    return $page = end($link_array);
}

function get_short_uni_name($uni_name)
{
    $names = array(
        "Universiteti i Prishtines - Fakulteti i Shkencave Matematiko-Natyrore" => "Up-FSHMN",
        "Universiteti i Prishtines - Fakulteti Ekonomik" => "Up-FE",
        "Universiteti i Prishtines - Fakulteti i Inxhinierise Elektrike dhe Kompjuterike" => "Up-FIEK",
        "Universiteti i Prishtines - Fakulteti i Edukimit" => "Up-FE",
        "Universiteti i Prishtines - Fakulteti i Inxhinierise Mekanike" => "Up-FIM",
        "Universiteti i Prishtines - Fakulteti i Shkencave te Aplikuara" => "UP-FSHA",
        'Universiteti i Mitrovices "Isa Boletini" - Fakulteti i Teknologjise Ushqimore' => "UMITRO-FTU",
        'Universiteti i Mitrovices "Isa Boletini" - Fakulteti i Inxhinierise Mekanike dhe Kompjuterike' => "UMITRO-FIMK",
        'Universiteti i Mitrovices "Ukshin Hoti" - Fakulteti i Shkencave Kompjuterike' => "UMITRO-FSHK"
    );


    if (isset($names[$uni_name])) {
        return $names[$uni_name];
    } else {
        return $uni_name;
    }

}

function is_mobile()
{

    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

}