<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function index(){

        return view('admin.business_map');
    }
}
