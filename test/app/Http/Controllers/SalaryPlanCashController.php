<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblsalaryplansbycash;

class SalaryPlanCashController extends Controller
{
    //
    function SaveNewSlryPlanCashData(Request $req ){
        $TblSlpc            = new Tblsalaryplansbycash;
        $TblSlpc->splog     = $req -> PlanMode;
        $TblSlpc->sphour    = $req -> TxtHourPay;
        $TblSlpc->sphalfday = $req -> TxtHalfDayPay;
        $TblSlpc->spday     = $req -> TxtDayPay;
        $TblSlpc->spweek    = $req -> TxtWekPay;
        $TblSlpc->spmonth   = $req -> TxtMonPay;
        $TblSlpc->save();
        return redirect('NewSlryPlanCash');
    }
}
