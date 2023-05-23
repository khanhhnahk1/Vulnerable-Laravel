<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LFIController extends Controller
{
    public function index(Request $request){
        
            return view('lfi');
    }
    public function lfi(Request $request){
        
            $a=$request->input("file");
            return response(include($a));
        
    }
}
