<?php


namespace App\Http\Controllers\Admin;


use App\businesses_map;
use App\Http\Controllers\Controller;
use App\Skills;
use App\Surveys;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class BusinessDataController extends Controller
{
    public function index(){

        $skills = Skills::all();
        $query = businesses_map::query();
        $query = $query->select(DB::raw('*'));
        $query = $query->limit('20');
        $results = $query->get();
        foreach($results as $res){
            $business_data[] = $res;
        }

        foreach($skills as $skill){
            $skills_data[] = array(
                'skill_name' => $skill->skill_name,
                'id' => $skill->id
            );
        }


        $data = array(
          'business_data' => (isset($business_data)) ? $business_data : [],
           'skills_data' => (isset($skills_data)) ? $skills_data : []
        );


        return view('admin.business_data')->with('data',$data);
    }


    public function fetch_data(Request $request)
    {

        $params = $request->all();

        $totalRecords = businesses_map::count();


        $data = DB::table('businesses_map')
            ->offset($params['start'])
            ->limit($params['length'])
            ->get();


        foreach ($data as $d) {
            $activities = explode('::',$d->activities);
            $data_result[] = array(
                'name_of_business' => $d->name_of_business,
                'status' => $d->status,
                'fiscal_number' => $d->fiscal_number,
                'business_type' => $d->business_type,
                'capital' => $d->capital,
                'number_of_employees' => $d->number_of_employees,
                'owners' => $d->owners,
                'owners_gender' => $d->owners_gender,
                'authorized_persons' => $d->authorized_persons,
                'date_of_registration' => $d->date_of_registration,
                'link_of_arbk' => $d->link_of_arbk,
                'registration_number' => $d->registration_number,
                'municipality' => $d->municipality,
                'primary_activity' =>  (isset($activities[0])) ? $activities[0] : "",
                'secondary_activity' => (isset( $activities[1])) ?  $activities[1] : "",
                'actions' => '
                               
                                    <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                            data-toggle="modal"data-target="#DeleteModal"  onclick="deletebusiness(' . $d->id . ')">
                                        Delete
                                    </button>

                    '
            );
        }


        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" =>  (isset($data_result)) ? $data_result : []   // total data array
        );

        echo json_encode($json_data);
    }


    public function import_businesses(Request $request)
    {

        $request->csv_file->storeAs('csvs', '2.csv');

        $file = storage_path('app\csvs\2.csv');

        $customerArr = $this->csvToArray($file);


        for ($i = 0; $i < count($customerArr); $i++) {
            businesses_map::firstOrCreate(
                [
                    'name_of_business' => $customerArr[$i]['name_of_business'],
                    'status' => $customerArr[$i]['status'],
                    'fiscal_number' => $customerArr[$i]['fiscal_number'],
                    'business_type' => $customerArr[$i]['business_type'],
                    'capital' => $customerArr[$i]['capital'],
                    'number_of_employees'  => $customerArr[$i]['number_of_employees'],
                    'owners' => $customerArr[$i]['owners'],
                    'owners_gender' => $customerArr[$i]['owners_gender'],
                    'authorized_persons' => $customerArr[$i]['authorized_persons'],
                    'date_of_registration' => $customerArr[$i]['date_of_registration'],
                    'link_of_arbk' => $customerArr[$i]['link_of_arbk'],
                    'registration_number' => $customerArr[$i]['registration_number'],
                    'municipality' => $customerArr[$i]['municipality'],
                    'activities' => $customerArr[$i]['activities']
                ]
            );


        }

        return redirect('admin/business_data');
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    function destroy_business(Request $request){
        $id = $request->id;
        $bus = new businesses_map();

        $bus->destroy($id);


        return redirect('admin/business_data');
    }

    function destroy_survey(Request $request){
        $id = $request->id;
        $bus = new Surveys();

        $bus->destroy($id);


        return redirect('admin/business_data');
    }


    function add_survey(Request $request){

        $name_of_company = $request->name_of_company;
        $skills = $request->skills;
        $type = $request->type;


        $content = new Surveys();

        $content::firstOrCreate(
            array(
                "name_of_company" => $name_of_company,
                "skills" => serialize($skills),
                "type" => $type
            )
        );


        return redirect('admin/business_data');

    }

    public function fetch_data2(Request $request)
    {

        $params = $request->all();

        $totalRecords = Surveys::count();


        $data = DB::table('survey_response')
            ->offset($params['start'])
            ->limit($params['length'])
            ->get();


        foreach ($data as $d) {
            $skills = unserialize($d->skills);

            $data_result[] = array(
                'name_of_company' => $d->name_of_company,
                'skills' => implode(",",$skills),
                'type' => $d->type,
                'actions' => '
                               
                                    <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                            data-toggle="modal"data-target="#DeleteModal"  onclick="deletesurvey(' . $d->id . ')">
                                        Delete
                                    </button>

                    '
            );
        }


        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" =>  (isset($data_result)) ? $data_result : []   // total data array
        );

        echo json_encode($json_data);
    }

    function get_skill_names($skills) {

        $skills_uns = unserialize($skills);


        foreach($skills_uns as $skill){
            $name = Skills::find($skill);
            $skill_names[] = $name->skill_name ;
        }

        return $skill_names;
    }

}
