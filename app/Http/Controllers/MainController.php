<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    //
    // Lets make an function for the loginpage
    public function login(){
        return view('auth.login');
    }
    // Let us make an function for the register
    public function register(){
        return view('auth.register');
    }
    // let us make the function for saving the register data of the user
    public function save(Request $req){
        // let us make  the validation for the request
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|max:12|min:5',
        ]);
        // Let us store the user data in the database using model
        $admin = new Admin();
        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->password = Hash::make($req->password);
        $save = $admin->save();
        if($save)
        {
            return back()->with('success','Register Succussfully!');
        }
        else
        {
            return back()->with('fail','Registration Failed!');
        }
    }
    public function check(Request $req){
        $req->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:5|max:12',
        ]);
        $userinfo = Admin::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Oops We didnt Find Your Email');
        }
        else
        {
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->session()->put('LoggedUser',$userinfo->id);
                return redirect('/admin/header');
            }
            else
            {
                return back()->with('fail','Incorrect Password');
            }
        }
    }
    // Let us make the function for the profile
    public function header(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('backends.layout.dash',$data);
    }
    // Let us make the function for the logout
    public function logout(){
        if(Session()->has('LoggedUser')){
            Session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
}
