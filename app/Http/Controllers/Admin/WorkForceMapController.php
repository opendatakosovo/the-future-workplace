<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class WorkForceMapController extends Controller
{
    public function index(){

        return view('admin.work_force_map');
    }

}