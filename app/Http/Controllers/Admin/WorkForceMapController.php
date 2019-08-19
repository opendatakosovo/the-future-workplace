<?php


namespace App\Http\Controllers\Admin;


use App\Degrees;
use App\Http\Controllers\Controller;
use App\Municipalities;

class WorkForceMapController extends Controller
{
    public function index(){


        return view('admin.work_force_map');
    }

}