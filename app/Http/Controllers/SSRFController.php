<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSRFController extends Controller
{
    public function index(Request $request){
        $response="";
        $url = $request->input('url');
        if(isset($url)){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPGET, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 5);
            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                echo 'Error: ' . curl_error($curl);
                curl_close($curl);
        }
    }
    return view('ssrf')->with('response', $response);
}
}