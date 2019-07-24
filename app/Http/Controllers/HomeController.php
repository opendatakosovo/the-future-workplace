<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:05 PM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index(){


        return view('client.home');
    }
}