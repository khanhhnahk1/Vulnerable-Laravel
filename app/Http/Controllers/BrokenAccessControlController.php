<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrokenAccessControlController extends Controller
{
    public function showNote(Request $request){
        $result=DB::select("Select * from note where isSecret=0");
        return view('brac')->with('result',$result);
    }

    public function insertNote(Request $request){
        $postName=$request->input('postName');
        $author=$request->input('author');
        $isSecret=$request->input('isSecret');
        $content=$request->input('content');
        DB::insert('Insert into note (postName,Author,isSecret,Content) values(?,?,?,?)',[$postName,$author,$isSecret,$content]);
        return view('brac_insert');
    }
    public function showSpecificNote($PostID){
        $result=DB::select("Select * From note Where PostID=?",[$PostID]);
        return view('brac_specific_note')->with('result',$result);
    }
}
