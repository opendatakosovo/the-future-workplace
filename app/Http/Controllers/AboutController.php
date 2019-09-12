<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $data = DB::table('about_us')->latest('created_at')->first();
        return view('client.about')->with("data",$data);
    }
}