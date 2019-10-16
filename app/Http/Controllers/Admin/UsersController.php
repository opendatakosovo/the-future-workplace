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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(){

        $users  = User::all();

        $data = array(
            'users' => $users
        );
        return view('admin.user_management',$data);
    }

    public function store_user(Request $request){



       $user = new User();

       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);

       $user->save();


        return redirect('/admin/user-management');
    }

    public function destroy(Request $request){
        $id = $request->id;

        $user = new User();
        $user->destroy($id);
        return redirect('/admin/user-management');
    }

    public function edit_user(Request $request){
        $id = $request->id;
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect('/admin/user-management');
    }
}