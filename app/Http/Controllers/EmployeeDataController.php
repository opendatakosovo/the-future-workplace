<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/14/2019
 * Time: 10:53 AM
 */

namespace App\Http\Controllers;


class EmployeeDataController extends Controller
{
    public function index(){

        return view('client.employee_data');
    }
}