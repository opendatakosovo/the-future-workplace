<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/5/2019
 * Time: 4:31 PM
 */

namespace App\Http\Controllers;


class SkillsMismatchController extends Controller
{

    public function index(){

        return view('client.mismatch');
    }

}