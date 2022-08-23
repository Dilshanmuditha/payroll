<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbldepartment;
use PDF;

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

    public function deparmentsPdf(Request $req )
    { 
        $TblDeparts = Tbldepartment::all();
        $TblDeparts->dpartcode = $req -> DepCode;
        $TblDeparts->dpartname = $req -> DepName;
        $pdf = PDF::loadView('departmentPdf',compact('TblDeparts'));
        
        return $pdf->download('Department.pdf',[
            'TblDeparts' => Tbldepartment::all(),
        ]);
        
    }
}
