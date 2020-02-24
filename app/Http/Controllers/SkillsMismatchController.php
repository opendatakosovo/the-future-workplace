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
        $up_fshmn_shk_year1 = [
            trans('translation.math_elementar'),
            trans('translation.math_discrete'),
            trans('translation.prog_algorithm'),
            trans('translation.intro_cs'),
            trans('translation.eng_1'),
            trans('translation.calc_1'),
            trans('translation.algebra_geometry'),
            trans('translation.data_structure'),
            trans('translation.comp_netw_www'),
            trans('translation.comp_app_1'),
            trans('translation.eng_2'),
            ];

        $up_teknik_inxh_year1 = [
            trans('translation.math_1'),
            trans('translation.physics_1'),
            trans('translation.electro'),
            trans('translation.prog_lang'),
            trans('translation.eng_lang'),
            trans('translation.elec_circuits'),
            trans('translation.physics_2'),
            trans('translation.math_2'),
            trans('translation.algorithms'),
            trans('translation.digital_circuits'),
        ];
        $up_teknik_telekomunikacion_year1 = [
            trans('translation.math_1'),
            trans('translation.physics_1'),
            trans('translation.electro'),
            trans('translation.prog_lang'),
            trans('translation.eng_lang'),
            trans('translation.elec_circuits'),
            trans('translation.physics_2'),
            trans('translation.math_2'),
            trans('translation.algorithms'),
            trans('translation.digital_circuits'),
        ];

        $up_fshmn_shk_year2 = [
            trans('translation.calc_2'),
            trans('translation.num_analyze_1'),
            trans('translation.comp_arch'),
            trans('translation.data_base'),
            trans('translation.data_safety'),
            trans('translation.comp_app_2'),
            trans('translation.num_analyze_2'),
            trans('translation.probability_theory'),
            trans('translation.oop_gui_prog'),
            trans('translation.comp_graphic'),
            trans('translation.artificial_intelligence'),
            trans('translation.linear_prog'),
        ];
        $up_teknik_inxh_year2 = [
            trans('translation.electronics'),
            trans('translation.math_3k'),
            trans('translation.signal_systems'),
            trans('translation.data_base'),
            trans('translation.oop'),
            trans('translation.comp_arch'),
            trans('translation.comp_network'),
            trans('translation.data_safety'),
            trans('translation.human_comp_communication'),
            trans('translation.internet_prog'),
            trans('translation.project_managing'),
        ];
        $up_teknik_telekomunikacion_year2 = [
            trans('translation.electric_materials'),
            trans('translation.math_3e'),
            trans('translation.signal_systems'),
            trans('translation.automatics'),
            trans('translation.electro'),
            trans('translation.electric_measurements'),
            trans('translation.comp_arch'),
            trans('translation.electroenergy'),
            trans('translation.electromagnetic_signals'),
            trans('translation.telecommunication'),
            trans('translation.project_managing'),
        ];
        //YEAR 3
        $up_fshmn_shk_year3 = [
            trans('translation.prog_www'),
            trans('translation.algorithm_analysis'),
            trans('translation.static'),
            trans('translation.data_analyze'),
            trans('translation.soft_modeling'),
            trans('translation.game_developing'),
            trans('translation.distribute_prog'),
            trans('translation.img_processing'),
            trans('translation.software_engineering'),
            trans('translation.parallel_prog'),
            trans('translation.oop_developing'),
            trans('translation.buss_internet'),
        ];
        $up_teknik_inxh_year3 = [
            trans('translation.microprocessor_microcontroller'),
            trans('translation.operative_systems'),
            trans('translation.software_engineering'),
            trans('translation.lang_modeling'),
            trans('translation.entrepreneur'),
            trans('translation.distribute_systems'),
            trans('translation.data_mining'),
            trans('translation.artificial_intelligence'),
            trans('translation.internet_security'),
            trans('translation.visual_computing'),
            trans('translation.mobile_prog'),
        ];
        $up_teknik_telekomunikacion_year3 = [
            trans('translation.info_theory'),
            trans('translation.digital_signals'),
            trans('translation.microwaves_antenna'),
            trans('translation.mobile_communication'),
            trans('translation.entrepreneur'),
            trans('translation.broadcasting_signals'),
            trans('translation.analog_circuits'),
            trans('translation.commutating_signals'),
            trans('translation.optic_technology'),
            trans('translation.intro_electromagnetics'),
            trans('translation.digital_tv'),
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