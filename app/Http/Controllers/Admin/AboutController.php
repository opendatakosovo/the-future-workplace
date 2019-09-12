<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/12/2019
 * Time: 9:54 AM
 */

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function index(){

        $data = DB::table('about_us')->latest('created_at')->first();
        return view('admin.about_us')->with("data",$data);
    }

    public function store(Request $request)
    {

        $content = new AboutUs();

        $content::firstOrCreate(
            array(
                "content1" => $request->first,
                "content2" => $request->second,
                "content3" => $request->thirdd
            )
        );



        return redirect('admin/about');
    }

}