<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FileUploadController extends Controller{
    public function index(Request $request){
        $files = Storage::files('uploads');

        return view('upload')->with('files',$files);
    }

    public function upload(Request $request){
         
        if($request->hasFile('file')) {
            $file = $request->file('file');
            
            $filenameWithExt = $file->getClientOriginalName(); 
            
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $file->getClientOriginalExtension();
            
            $fileNameToStore = $filename.'.'.$extension;
            
            // Upload File
            $file->move(public_path('/store/'), $fileNameToStore);
            return response("<a href=\"/store/".$fileNameToStore."\">Enter the shell file</a>");
    }
}
    public function getFile($filename){
        if($filename){
            $fileResponse=public_path('/store/'.$filename);
            return response()->file($fileResponse);
        }
    }
}
