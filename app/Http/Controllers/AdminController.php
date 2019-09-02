<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin');
    }
    public function admin()
    {
        return view('admin');
    }

    public function update_user()
    {

//        var_dump(Auth::user()->password);
        return view('admin.edit_profile');
    }

}
