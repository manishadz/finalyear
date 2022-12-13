<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:8|max:20'
        ]);
//to get new user and put it on database.
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');

    } else {
        return back()->with('fail', 'Something Worng');
    }
}

//for login:
    public function login(){
        return view("auth.login");

    }
// login validation along with taking the data from registration form saved on database.
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:20'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

            }
             else {
                return back()->with('fail', 'This password is incorrect');
            }
        }

         else {
            return back()->with('fail', 'This email is not register');

      }
    }
    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    //for logout:
        public function logout(){
            if (Session::has('loginId')){
                Session::pull('loginId');
               return redirect('login');

            }
        }

}
