<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblemployee;
use PhpParser\Node\Expr\New_;

class CreateNewEmployee extends Controller
{
    //
    function SaveNewEmployeeData(Request $req){
        //return $req->input();
        $TblEmployee = new Tblemployee;
        $TblEmployee->empno = $req->EmpID;
        $TblEmployee->empfirstname = $req->EmpFName;
        $TblEmployee->empmiddlename = $req->EmpMName;
        $TblEmployee->emplastname = $req->EmpLName;
        $TblEmployee->empdpartmntid = $req->EmpDepartment;
        $TblEmployee->emppstid = $req->EmpPosition;
        $TblEmployee->empsalary = $req->EmpSalary;
        $TblEmployee->save();
        return redirect('NewEmployee');
    }
}
