<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/17/2019
 * Time: 11:15 AM
 */

namespace App\Http\Controllers;


use App\businesses_map;
use App\Exports\BusinessesExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Excel;
use Illuminate\Support\Facades\File;
use App\Graduates;
use App\Exports\WorkforceExport;
class DownloadsController extends Controller
{
    public function index()
    {

        return view('client.downloads');
    }

    public function download_content(Request $request)
    {

        $document = $request->document;
        $year = $request->year;
        $type = $request->type;

        if ($document == 'companies_data') {
            if ($type == 'csv') {
                return Excel::download(new BusinessesExport($year), 'businesess.csv');
            } elseif ($type == 'json') {

                $data = $this->export_company_data_json($year);
                $fileName = time() . '_datafile_businesess.json';
                File::put(storage_path($fileName), $data);
                return Response::download(storage_path($fileName))->deleteFileAfterSend(true);
            }


        } elseif ($document == 'high_school_data') {
            if ($type == 'csv') {
                return Excel::download(new WorkforceExport($year,'high_school'), 'high_school_data.csv');

            } elseif ($type == 'json') {
                $data = $this->export_company_data_json($year);
                $fileName = time() . '_datafile_high_school_data.json';
                File::put(storage_path($fileName), $data);
                return Response::download(storage_path($fileName))->deleteFileAfterSend(true);
            }

        } elseif ($document == 'workforce_data') {
            if ($type == 'csv') {
                return Excel::download(new WorkforceExport($year,'uni'), 'university_graduates_data.csv');

            } elseif ($type == 'json') {

                $data = $this->export_workforce_data_json($year);
                $fileName = time() . '_datafile_workforce_data.json';
                File::put(storage_path($fileName), $data);
                return Response::download(storage_path($fileName))->deleteFileAfterSend(true);
            }

        } elseif ($document == 'atk_data') {
            if ($type == 'csv') {
                return Excel::download(new BusinessesExport($year), 'atk_data.csv');
            } elseif ($type == 'json') {

                $data = $this->export_company_data_json($year);
                $fileName = time() . '_datafile_atk_data.json';
                File::put(storage_path($fileName), $data);
                return Response::download(storage_path($fileName))->deleteFileAfterSend(true);
            }
        }


    }


    public function export_company_data_json($year)
    {

        $query = businesses_map::query();
        $query = $query->select(DB::raw('*'));
        if ($year != 'all') {
            $query = $query->where('date_of_registration', 'LIKE', '%' . $year . '%');
        }
        $data = $query->get();

        return json_encode($data);
    }

    public function export_workforce_data_json($year){
        $query = Graduates::query();
        $query = $query->select(DB::raw('*'));
        if ($year != 'all') {
            $query = $query->where('year', '=',$year);
        }
        $data = $query->get();

        return json_encode($data);
    }

}