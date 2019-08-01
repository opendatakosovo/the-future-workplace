<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class StatsController extends Controller
{
    public function index(){

        return view('admin.stats');
    }
}