<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use illuminate\support\Facades\DB;
use App\Models\Tbldepartment;

class DepartmentController extends Controller
{
    //
    function showt(){
        $data = Tbldepartment::all();
        //return view('depa',['section'=>$data]);
        return view('CreateNewEmployee',['section'=>$data]);
    }

    /*function ShowDepartmentList(){
        //return Tbldepartment::all();
        $data = Tbldepartment::all();
        //return view('ListDepartments',['item' =>$data]);
        return view('CreateNewEmployee',['section'=>$data]);
        //return view('CreateNewDeparts',['item' =>$data]);
    }
*/

    function SaveNewDepartsData(Request $req ){
        //return $req->input();
        $TblDeparts = new Tbldepartment;
        $TblDeparts->dpartcode = $req -> DepCode;
        $TblDeparts->dpartname = $req -> DepName;
        $TblDeparts->save();
        return redirect('NewDepartments');
    }

    public function showDepartmentData(Tbldepartment $TblDeparts)
    {
        return view('CreateNewDeparts',[
            'TblDeparts' => Tbldepartment::all(),
        ]);
    }
}
