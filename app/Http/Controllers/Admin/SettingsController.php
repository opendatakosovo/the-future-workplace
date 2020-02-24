<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/8/2019
 * Time: 2:30 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class SettingsController extends Controller
{


    public function navigation(){



        return view('admin.navigation');
    }
}