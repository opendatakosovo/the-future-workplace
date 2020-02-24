<?php


namespace App\Http\Controllers\Admin;


use App\Degrees;
use App\Http\Controllers\Controller;
use App\Municipalities;

class WorkForceDataController extends Controller
{
    public function index(){


        return view('admin.workforce_data');
    }

}