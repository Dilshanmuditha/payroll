<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblemployee;

class MemberController extends Controller
{
    //
    function show(){
        $data = Tblemployee::all();
        return view('list',['employee'=>$data]);
        return view('depa',['employee'=>$data]);
    }
}
