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

    public function index()
    {

        $logos = ["primary", "info", 'danger'];
        $up_fshmn_shk_year1 = ["Matematikë elementare", "Matematikë diskrete", "Programimi dhe algoritmet", "Hyrje në shkencë kompjuterike", "Gjuhe Angleze I", "Kalkulus I", "Algjebër lineare me gjeometri analitike", "Strukturat e të dhënave", "Rrjetat kompjuterike dhe WWW", "Aplikacione kompjuterike I", "Gjuhe Angleze II"];
        $up_teknik_inxh_year1 = [
            "Matematika 1",
            "Fizika 1",
            "Bazat e elektroteknikes",
            "Gjuhe Programuese",
            "Gjuhe Angleze",
            "Qarqet elektrike",
            "Fizika 2",
            "Matematika 2",
            "Algoritmet dhe strukturat e të dhënave",
            "Qarqet digjitale"
        ];
        $up_teknik_telekomunikacion_year1 = [
            "Matematika 1",
            "Fizika 1",
            "Bazat e elektroteknikes",
            "Gjuhe Programuese",
            "Gjuhe Angleze",
            "Qarqet elektrike",
            "Fizika 2",
            "Matematika 2",
            "Algoritmet dhe strukturat e të dhënave",
            "Qarqet digjitale"
        ];
        $up_fshmn_shk_year2 = [
            "Kalkulus II",
            "Analiza numerike I",
            "Arkitektura e kompj. dhe sistemet operative",
            "Bazat e të dhënave",
            "Siguria e të dhënave në kompjuter",
            "Aplikacione kompjuterike II",
            "Analiza numerike II",
            "Teoria e gjasës",
            "Programimi OOP dhe GUI",
            "Grafika kompjuterike",
            "Intelegjenca artificiale",
            "Programimi Linear"
        ];
        $up_teknik_inxh_year2 = [
            "Elektronika",
            "Matematika 3K",
            "Sinjalet dhe sistemet",
            "Bazat e të dhënave",
            "Programimi i orientuar në objekte",
            "Arkitektura e kompjuterëve",
            "Rrjetat kompjuterike",
            "Siguria e të dhënave",
            "Komunikimi njeri-kompjuter",
            "Programimi në Internet",
            "Menaxhimi i projekteve"
        ];
        $up_teknik_telekomunikacion_year2 = [
            "Materialet elektroteknike",
            "Matematika 3E",
            "Sinjalet dhe sistemet",
            "Automatika",
            "Elektronika",
            "Matjet elektrike",
            "Arkitektura e kompjuterëve",
            "Elektroenergjetika",
            "Fushat dhe valët elektromagnetike",
            "Telekomunikacionet",
            "Menaxhimi i projekteve"
        ];
        //YEAR 3
        $up_fshmn_shk_year3 = [
            "Programimi në WWW",
            "Analizë e algoritmeve",
            "Statistikë",
            "Analiza e të dhënave",
            "Modelim softuerik",
            "Zhvilimi i lojërave",
            "Programimi i distribuuar",
            "Procesimi i imazheve",
            "Inxhinierimi i softuerit",
            "Shkrim Akademik me kulturë gjuhe",
            "Programimi paralel",
            "Zhvillimi i softuerit në OOP",
            "Biznesi dhe interneti"
        ];
        $up_teknik_inxh_year3 = [
            "Mikroprocesorët dhe mikrokontrollerët",
            "Sistemet Operative",
            "Inxhinieria softuerike",
            "Modeli i te dhënave dhe gjuhet e pyetesoreve",
            "Ndermarresia",
            "Sistemet e shpërndara",
            "Data Mining",
            "Bazat e Inteligjencës artificiale",
            "Internet security",
            "Visual Computing",
            "Programimi i pajisjeve mobile"
        ];
        $up_teknik_telekomunikacion_year3 = [
            "Teoria e informacionit",
            "Përpunimi digjital i sinjaleve",
            "Mikrovalë dhe antena",
            "Komunikimet mobile",
            "Ndermarresia",
            "Sisteme transmetuese",
            "Qarqet komunikuese analoge",
            "Sisteme komutuese",
            "Teknologjia e komunikimeve optike",
            "Hyrje në bioelektromagnetikë",
            "Televizioni digjital"
        ];
        foreach ($up_fshmn_shk_year1 as $fsh_shk_1) {
            $randIndex = array_rand($logos);
            $up_fshmn_shk_year1_result[] = array(
                "name" => $fsh_shk_1,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_inxh_year1 as $fsh_tek_inxh_1) {
            $randIndex = array_rand($logos);
            $up_teknik_inxh_year1_result[] = array(
                "name" => $fsh_tek_inxh_1,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_telekomunikacion_year1 as $fsh_tek_tel_1) {
            $randIndex = array_rand($logos);
            $up_teknik_telekomunikacion_year1_result[] = array(
                "name" => $fsh_tek_tel_1,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_fshmn_shk_year2 as $fsh_shk_2) {
            $randIndex = array_rand($logos);
            $up_fshmn_shk_year2_result[] = array(
                "name" => $fsh_shk_2,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_inxh_year2 as $fsh_tek_inxh_2) {
            $randIndex = array_rand($logos);
            $up_teknik_inxh_year2_result[] = array(
                "name" => $fsh_tek_inxh_2,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_telekomunikacion_year2 as $fsh_tek_tel_2) {
            $randIndex = array_rand($logos);
            $up_teknik_telekomunikacion_year2_result[] = array(
                "name" => $fsh_tek_tel_2,
                'logo' => $logos[$randIndex]
            );
        }

        //YEAR 3
        foreach ($up_fshmn_shk_year3 as $fsh_shk_3) {
            $randIndex = array_rand($logos);
            $up_fshmn_shk_year3_result[] = array(
                "name" => $fsh_shk_3,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_inxh_year3 as $fsh_tek_inxh_3) {
            $randIndex = array_rand($logos);
            $up_teknik_inxh_year3_result[] = array(
                "name" => $fsh_tek_inxh_3,
                'logo' => $logos[$randIndex]
            );
        }
        foreach ($up_teknik_telekomunikacion_year3 as $fsh_tek_tel_3) {
            $randIndex = array_rand($logos);
            $up_teknik_telekomunikacion_year3_result[] = array(
                "name" => $fsh_tek_tel_3,
                'logo' => $logos[$randIndex]
            );
        }
        $data = array(
            'up_fshmn_shk_year1_result' => $up_fshmn_shk_year1_result,
            'up_teknik_inxh_year1_result' => $up_teknik_inxh_year1_result,
            'up_teknik_telekomunikacion_year1_result' => $up_teknik_telekomunikacion_year1_result,
            'up_fshmn_shk_year2_result' => $up_fshmn_shk_year2_result,
            'up_teknik_inxh_year2_result' => $up_teknik_inxh_year2_result,
            'up_teknik_telekomunikacion_year2_result' => $up_teknik_telekomunikacion_year2_result,
            'up_fshmn_shk_year3_result' => $up_fshmn_shk_year3_result,
            'up_teknik_inxh_year3_result' => $up_teknik_inxh_year3_result,
            'up_teknik_telekomunikacion_year3_result' => $up_teknik_telekomunikacion_year3_result,


        );
        return view('client.mismatch')->with('data', $data);
    }


    public function fetch_data()
    {

        $year = $_GET['year'] ?? null;
        $cities = $_GET['cities'] ?? null;
        $status = $_GET['status'] ?? null;
        $activity = $_GET['activity'] ?? null;

        $activities_array = [];
        $skills = Skills::all();
        foreach ($skills as $skill) {
            $skills_array[] = $skill->skill_name;

        }
        $categories = ['Supply', 'Demand'];
        foreach ($categories as $category) {
            $data[] = array(
                'name' => $category,
                'data' => $this->get_col_data($skills, $category)
            );
        }
        echo json_encode(array($skills_array, $data));

    }

    function get_col_data($skills, $category)
    {
        $totalSurveys = Surveys::count();
        $totalGrads = Graduates::sum('number_of_graduates');
        if ($category == 'Supply') {
            foreach ($skills as $skill) {
                $query = Graduates::query();
                $query = $query->select(DB::raw('sum(number_of_graduates) as sum'));
                $query = $query->join('degrees', 'degrees.id', '=', 'graduates.degree_id');
                $query = $query->where('skills', 'LIKE', '%"' . $skill->skill_name . '"%');
                $results = $query->get();

                //Results Array Convertion with Municipality Keys
                foreach ($results as $result) {
                    $data_counted = $result->sum;
                }

                $res = $data_counted / $totalGrads;
                if ($res == 1) {
                    $res = 100;
                } else {
                    $res = round((float)$res * 100);
                }
                $calculate[] = $res;
            }

            return $calculate;
        } else {
            foreach ($skills as $skill) {
                $query = Surveys::query();
                $query = $query->select(DB::raw('COUNT(*) as count'));
                $query = $query->where('skills', 'LIKE', '%"' . $skill->skill_name . '"%');
                $results = $query->get();

                //Results Array Convertion with Municipality Keys
                foreach ($results as $result) {
                    $data_counted = $result->count;
                }
                $res = $data_counted / $totalSurveys;
                if ($res == 1) {
                    $res = 100;
                } else {
                    $res = round((float)$res * 100);
                }
                $calculate[] = $res;
            }
            return $calculate;

        }


    }
}