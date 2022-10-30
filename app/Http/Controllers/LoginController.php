<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    function admin_login(Request $req)
    {
        $username=$req->get('admin_username');
        $password=$req->get('password');

        $admininfo = DB::select('select * from admin where username = ? and password = ?',[$username,$password]);
        if($admininfo != null){
            $data = $req->input('admin_username');
            $req->session()->put('admin_username',$data);
            return redirect ('admin_profile');
            
        }
        else{
            return view('admin_login')->with('error', 'Invalid username or password!');
        }
    }
    function user_login(Request $req)
    {
        $username=$req->get('email');
        $password=$req->get('password');

        $userinfo = DB::select('select * from users where email = ? and password = ?',[$username,$password]);
        if($userinfo != null){
            print_r($userinfo[0]->id);
            $req->session()->put('user',$userinfo[0]);
            return redirect ('user_profile');         
        }
        else{
            return view('login')->with('error', 'Invalid username or password!');
        }
    }
    public function edit(Signup $userData,$id)
    {
        $user = Signup::find($id);
        if(session()->has('user')){
            return view('user_edit',['user'=>$user]);
        }
        else{
            return view('home');
        }
        
    }
    public function update(Request $request, Signup $userData, $id)
    {
         $user = Signup::find($id);
         $user->first_name = $request->get('first_name');
         $user->last_name = $request->get('last_name');
         $user->email = $request->get('email');
         $user->password = $request->get('password');
         $user->save();
         return redirect('/user_profile');
    }
    
}
