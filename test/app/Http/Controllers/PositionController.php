<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblposition;
use App\Models\Tbldepartment;

class PositionController extends Controller
{
    //
    function ShowPositions(){
        $data['position'] = Tblposition::all();
	$data['department'] = Tbldepartment::all();
        //return view('depa',['EmpPositions'=>$datapo]);
        return view('CreateNewEmployee',['data'=>$data]);
    }
}
