<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/8/2019
 * Time: 1:17 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{

    public function index(){

        $users  = User::all();

        $data = array(
            'users' => $users
        );
        return view('admin.user_management',$data);
    }
}