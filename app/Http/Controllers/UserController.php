<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class UserController extends Controller
{

    public function RegisterUser(Request $request){

        $this->validate($request, [

            'fname' => 'required|max:20',
            'lname' =>  'required|max:20',
            'userid' =>  'required|unique:users',
            'telno'  =>  'required|max:20',
            'password'  =>  'required|min:12',
            'index' => 'required'
        ]);

        $table = new User();

        $table->fname = $request->input('fname');
        $table->lname = $request->input('lname');
        $table->userid = $request->input('userid');
        $table->index = $request->input('index');
        $table->telno = $request->input('telno');
        $table->password = bcrypt($request->input('password'));

        $table->save();

        return redirect()->back()->with('message','Registered Successfully');


    }

    public function Login(Request $request){
        $data = $request->only('userid','password');
        if(Auth::attempt($data)){
            return redirect()->route('welcome');
        }
        return redirect()->back()->with('message','Login Failed, Check your Username or Password and Try Agan.');
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect('/')->with('message','Logged Out Successfully');
    }

    public function AdminLogin(Request $request){
        $data = $request->only('adminuserid','password');
        if(Auth::attempt($data)){
            return redirect()->route('admindash');
        }
        return redirect()->back()->with('message','Login Failed, Check your Username or Password and Try Agan.');
    }
}
