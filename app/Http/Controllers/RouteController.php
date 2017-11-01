<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function getLogin(){

        return view('login');
    }

    public function getRegister(){

        return view('register');
    }

    public function getWelcome(){
        return view('welcome');
    }

    public function getSelect(){
        return view('select');
    }

    public function getAdmin(){
        return view('adminlogin');
    }

    public function getAdminDashboard(){
        return view('admindash');
    }

    public function showOrders(){
        return view('orders');
    }

    public function showAccount(){
        return view('account');
    }

    public function getError(){
        return view('404');
    }

    public function getpayment()
    {
       return view('payment');
    }

    public function getpaymentdata()
    {
       return view('paymentdata');
    }
}
