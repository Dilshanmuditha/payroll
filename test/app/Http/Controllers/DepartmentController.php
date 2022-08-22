<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbldepartment;

class DepartmentController extends Controller
{
    function showt(){
        $data = Tbldepartment::all();
        return view('CreateNewEmployee',['section'=>$data]);
    }

    function SaveNewDepartsData(Request $req ){
        $TblDeparts = new Tbldepartment;
        $TblDeparts->dpartcode = $req -> DepCode;
        $TblDeparts->dpartname = $req -> DepName;
        $TblDeparts->save();
        return redirect('NewDepartments');
    }

    public function showDepartmentData()
    {
        return view('CreateNewDeparts',[
            'TblDeparts' => Tbldepartment::all(),
        ]);
    }
}
