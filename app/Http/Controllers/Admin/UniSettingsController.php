<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 11:02 AM
 */

namespace App\Http\Controllers\Admin;

use App\Degrees;
use App\Graduates;
use App\Http\Controllers\Controller;
use App\Skills;
use App\Universities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniSettingsController extends Controller
{

    public function index()
    {
        $skill_results = [];
        $degree_results = [];
        $university_results = [];

        $skills = Skills::all();
//        $degrees = Degrees::all();

        $degrees = DB::table('degrees')
            ->select('degrees.id', 'degrees.degree_name', 'uni_id', 'skills', 'uni_name')
            ->join('universities', 'universities.id', '=', 'degrees.uni_id')
            ->get();

        $universities = Universities::all();

        foreach ($skills as $skill) {
            $skill_results[] = array(
                'id' => $skill->id,
                'skill_name' => $skill->skill_name
            );
        }
        foreach ($degrees as $degree) {
            $degree_results[] = array(
                'id' => $degree->id,
                'degree_name' => $degree->degree_name,
                'uni_id' => $degree->uni_id,
                'uni_name' => $degree->uni_name,
                'skills' => $this->get_skill_names(unserialize($degree->skills)),
                'skill_ids' => implode(',', unserialize($degree->skills))
            );
        }
        foreach ($universities as $university) {
            $university_results[] = array(
                'id' => $university->id,
                'uni_name' => $university->uni_name,
                'uni_type' => $university->uni_type
            );
        }


        $data = array(
            'skills' => $skill_results,
            'degrees' => $degree_results,
            'universities' => $university_results
        );
        return view('admin/uni_settings')->with('data', $data);
    }


    public function store_university(Request $request)
    {

        $uni = new Universities();

        $uni->uni_name = $request->uni_name;
        $uni->uni_type = $request->uni_type;

        $uni->save();

        return redirect('admin/uni-settings');
    }

    public function destroy_university(Request $request)
    {

        $id = $request->id;
        $uni = new Universities();

        $uni->destroy($id);


        return redirect('admin/uni-settings');
    }

    public function edit_university(Request $request)
    {

        $id = $request->id;
        $uni = Universities::find($id);

        $uni->uni_name = $request->uni_name;
        $uni->uni_type = $request->uni_type;
        $uni->save();


        return redirect('admin/uni-settings');
    }


    public function store_skill(Request $request)
    {


        $skill = new Skills();

        $skill->skill_name = $request->skill_name;

        $skill->save();

        return redirect('admin/uni-settings');
    }

    public function destroy_skill(Request $request)
    {

        $id = $request->id;
        $skill = new Skills();

        $skill->destroy($id);


        return redirect('admin/uni-settings');
    }

    public function edit_skill(Request $request)
    {

        $id = $request->id;
        if ($id != null) {
            $skill = Skills::find($id);

            $skill->skill_name = $request->skill_name;
            $skill->save();

        }

        return redirect('admin/uni-settings');
    }


    public function store_degree(Request $request)
    {

        $degree = new Degrees();

        $degree->degree_name = $request->degree_name;
        $degree->uni_id = $request->uni_id;

        $skills = $request->skill_ids;
        $degree->skills = serialize($skills);

        $degree->save();

        return redirect('admin/uni-settings');
    }

    public function destroy_degree(Request $request)
    {

        $id = $request->id;
        $uni = new Universities();

        $uni->destroy($id);


        return redirect('admin/uni-settings');
    }

    public function edit_degree(Request $request)
    {

        $id = $request->id;
        $uni = Universities::find($id);

        $uni->uni_name = $request->uni_name;
        $uni->uni_type = $request->uni_type;
        $uni->save();


        return redirect('admin/uni-settings');
    }


    public function store_graduate(Request $request)
    {

        $grad = new Graduates();

        $grad->uni_id = $request->uni_id;
        $grad->degree_id = $request->degree_id;
        $grad->number_of_graduates = $request->no_graduates;
        $grad->number_of_males = $request->no_males;
        $grad->number_of_females = $request->no_females;
        $grad->year = $request->year;

        $grad->save();

        return redirect('admin/uni-settings');
    }

    public function destroy_graduate(Request $request)
    {

        $id = $request->id;
        $grad = new Graduates();

        $grad->destroy($id);


        return redirect('admin/uni-settings');
    }

    public function edit_graduate(Request $request)
    {

        $id = $request->id;
        $grad = Graduates::find($id);

        $grad->uni_id = $request->uni_id;
        $grad->degree_id = $request->degree_id;
        $grad->number_of_graduates = $request->no_graduates;
        $grad->number_of_males = $request->no_males;
        $grad->number_of_females = $request->no_females;
        $grad->year = $request->year;
        $grad->save();


        return redirect('admin/uni-settings');
    }





    function get_skill_names($skills)
    {

        $skills_data = Skills::all();
        $skills_array = [];

        foreach ($skills_data as $skill) {
            $skills_array[$skill->id] = $skill->skill_name;
        }

        foreach ($skills as $sk) {
            $result[] = $skills_array[$sk];
        }

        $skills_imploded = implode(',', $result);
        return $skills_imploded;

    }


    public function import_graduates(Request $request)
    {

        $request->csv_file->storeAs('csvs', '1.csv');

        $file = storage_path('app\csvs\1.csv');

        $customerArr = $this->csvToArray($file);


        for ($i = 0; $i < count($customerArr); $i++) {
            Graduates::firstOrCreate($customerArr[$i]);
        }

        return redirect('admin/uni-settings');
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


    public function fetch_graduates(Request $request)
    {

        $params = $request->all();

        $totalRecords = Graduates::count();



        $data =  DB::table('graduates')
                ->offset($params['start'])
                ->limit($params['length'])
                ->get();


        foreach($data as $d){
            $data_result[] = array(
                'uni_id' => $this->get_name('university',$d->uni_id),
                'degree_id'=> $this->get_name('degrees',$d->degree_id),
                'instit_type'=> $this->get_name('institution',$d->uni_id),
                'number_of_graduates' => $d->number_of_graduates,
                'number_of_males' => $d->number_of_males,
                'number_of_females' => $d->number_of_females,
                'year' => $d->year,
                'actions' => '
                                    <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                            data-toggle="modal" data-target="#createGrad"  onclick="editGrad('.$d->id.','.$d->uni_id.','.$d->degree_id.','.$d->number_of_graduates.','.$d->number_of_males.','.$d->number_of_females.','.$d->year.')">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                            data-toggle="modal"data-target="#DeleteModal"  onclick="deleteGrad('.$d->id.')">
                                        Delete
                                    </button>

                    '
            );
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data_result   // total data array
        );

        echo json_encode($json_data);
    }


    function get_name($type,$id){

        if($type == 'university'){
            $name = DB::table('universities')->where('id', $id)->value('uni_name');
        }
        if($type == 'degrees' ){
            $name = DB::table('degrees')->where('id', $id)->value('degree_name');
        }
        if($type == 'institution' ){
            $name = DB::table('universities')->where('id', $id)->value('uni_type');
        }
        return $name;
    }
}