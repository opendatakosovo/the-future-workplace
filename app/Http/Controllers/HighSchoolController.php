<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/1/2019
 * Time: 9:31 AM
 */

namespace App\Http\Controllers;


class HighSchoolController extends Controller
{

    public function index(){

        return view('client.highschool');
    }
}