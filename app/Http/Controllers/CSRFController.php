<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CSRFController extends Controller
{
    public function index(Request $request){
        $result=DB::select("select * from csrf");
        return view('csrf')->with('result',$result);
    }
    
    public function changeEmail(Request $request){
        $email=$request->input('email');
        $update=DB::update("update csrf set email=? where username='khanhhnahk1'",[$email]);
        return view("change_email")->with('email',$email);
    }
}
