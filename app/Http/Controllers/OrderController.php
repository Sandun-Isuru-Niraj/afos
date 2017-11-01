<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{
    public function sendOrder(Request $request){
        $meal1 = 0;
        $meal2 = 0;
        $meal3 = 0;

        $table = new Order();

        $table->userid = Auth::user()->userid;
        $bf = $request->input('breakfast');
        $ln = $request->input('lunch');
        $dn = $request->input('dinner');

        if($bf == "veg"){
            $meal1 = 60;
        }else if($bf == "nonveg"){
            $meal1 = 90;
        }else{
            $meal1 = 0;
        }

        if($ln == "veg"){
            $meal2 = 100;
        }else if($ln == "nonveg"){
            $meal2 = 140;
        }else{
            $meal2 = 0;
        }

        if($dn == "veg"){
            $meal3 = 90;
        }else if($dn == "nonveg"){
            $meal3 = 110;
        }else{
            $meal3 = 0;
        }

        $table->breakfast = $bf;
        $table->lunch = $ln;
        $table->dinner = $dn;

        $table->total = $meal1+$meal2+$meal3;
        $table->save();

        return redirect()->back()->with('message','Order Sent Successfully');


    }}
