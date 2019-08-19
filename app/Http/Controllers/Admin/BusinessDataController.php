<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BusinessDataController extends Controller
{
    public function index(){

        return view('admin.business_data');
    }
}
