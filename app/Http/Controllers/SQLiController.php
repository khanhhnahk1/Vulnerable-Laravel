<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SQLiController extends Controller
{
    public function getUser($id){
        $user = DB::select("SELECT * FROM users WHERE id = $id");
        return $user;
}
}
