<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 1:11 PM
 */

namespace App\Http\Controllers\Admin;


use App\HighSchool;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HighSchoolDataController extends Controller
{

    public function index(){

        return view('admin.high_school_data');
    }

    public function fetch_data(Request $request)
    {

        $params = $request->all();

        $totalRecords = HighSchool::count();


        $data = DB::table('high_school_grads')
            ->offset($params['start'])
            ->limit($params['length'])
            ->get();


        foreach ($data as $d) {
//            $activities = explode('::',$d->activities);
            $data_result[] = array(
                'school' => $d->school,
                'municipality' => $d->municipality,
                'profile' => $d->profile,
                'year' => $d->year,
                'grade' => $d->grade,
                'male' => $d->male,
                'female' => $d->female,
                'actions' => '
                               
                                    <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                            data-toggle="modal"data-target="#DeleteModal"  onclick="delete_data(' . $d->id . ')">
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

    function destroy_data (Request $request){
        $id = $request->id;
        $bus = new HighSchool();

        $bus->destroy($id);


        return redirect('admin/highschool-data');
    }

    public function import_data(Request $request)
    {

        $request->csv_file->storeAs('csvs', 'highSchool.csv');

        $file = storage_path('app\csvs\highSchool.csv');

        $customerArr = $this->csvToArray($file);


        for ($i = 0; $i < count($customerArr); $i++) {
            HighSchool::firstOrCreate(
                [
                    'school' => $customerArr[$i]['school'],
                    'municipality' => $customerArr[$i]['municipality'],
                    'profile' => $customerArr[$i]['profile'],
                    'year' => $customerArr[$i]['year'],
                    'grade' => $customerArr[$i]['grade'],
                    'male' => $customerArr[$i]['male'],
                    'female' => $customerArr[$i]['female']
                ]
            );


        }


        return redirect('admin/highschool-data');
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
}