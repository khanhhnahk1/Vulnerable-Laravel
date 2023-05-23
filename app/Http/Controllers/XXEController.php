<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XXEController extends Controller
{
    public function index(Request $request){
        $payload=$request->input("payload");
        $xmlDoc = simplexml_load_string($payload, "SimpleXMLElement", LIBXML_NOENT); 
        if($xmlDoc){
            $result=$xmlDoc->payload;        }
        else{
            $result="";
        }
        return view("xxe")->with('result',$result);
    }
}
