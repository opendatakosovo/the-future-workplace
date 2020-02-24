<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class InstMapController extends Controller
{

    public function index(){

        return view('admin.inst_map');
    }

}