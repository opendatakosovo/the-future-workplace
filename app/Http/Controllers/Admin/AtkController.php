<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 10:48 AM
 */

namespace App\Http\Controllers\Admin;


use App\Atk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AtkController extends Controller
{

    public function index(){

        return view('admin.atk_data');
    }

    public function fetch_data(Request $request)
    {

        $params = $request->all();

        $totalRecords = Atk::count();


        $data = DB::table('atk_data')
            ->offset($params['start'])
            ->limit($params['length'])
            ->get();


        foreach ($data as $d) {
//            $activities = explode('::',$d->activities);
            $data_result[] = array(
                'regjioni' => $d->regjioni,
                'komuna' => $d->komuna,
                'ent_activity_no' => $d->ent_activity_no,
                'aktiviteti' => $d->aktiviteti,
                'tper_year' => $d->tper_year,
                'qarkullimi_total' => $d->qarkullimi_total,
                'mesatare_qarkullimit' => $d->mesatare_qarkullimit,
                'kategoria' => $d->kategoria,
                'nr_kompanive' => $d->nr_kompanive,
                'nr_puntoreve_ne_kompani' => $d->nr_puntoreve_ne_kompani,
                'nr_puntoreve_total' => $d->nr_puntoreve_total,
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
        $bus = new Atk();

        $bus->destroy($id);


        return redirect('admin/atk-data');
    }




    public function import_data(Request $request)
    {

        $request->csv_file->storeAs('csvs', 'atk.csv');

        $file = storage_path('app\csvs\atk.csv');

        $customerArr = $this->csvToArray($file);


        for ($i = 0; $i < count($customerArr); $i++) {
            Atk::firstOrCreate(
                [
                    'regjioni' => $customerArr[$i]['regjioni'],
                    'komuna' => $customerArr[$i]['komuna'],
                    'ent_activity_no' => $customerArr[$i]['ent_activity_no'],
                    'aktiviteti' => $customerArr[$i]['aktiviteti'],
                    'tper_year' => $customerArr[$i]['tper_year'],
                    'qarkullimi_total' => $customerArr[$i]['qarkullimi_total'],
                    'mesatare_qarkullimit' => $customerArr[$i]['mesatare_qarkullimit'],
                    'kategoria'  => $customerArr[$i]['kategoria'],
                    'nr_kompanive' => $customerArr[$i]['nr_kompanive'],
                    'nr_puntoreve_ne_kompani' => $customerArr[$i]['nr_puntoreve_ne_kompani'],
                    'nr_puntoreve_total' => $customerArr[$i]['nr_puntoreve_total']
                ]
            );


        }


        return redirect('admin/atk_data');
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