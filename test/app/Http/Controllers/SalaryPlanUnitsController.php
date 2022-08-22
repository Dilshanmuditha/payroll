<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblsalaryplansbyunit;

class SalaryPlanUnitsController extends Controller
{
    //
    function SaveNewSlryPlanUnitsData(Request $req ){
        $TblSlpu                 = new Tblsalaryplansbyunit;
        $TblSlpu->spulog         = $req -> PlanMode;
        $TblSlpu->spucriteria1   = $req -> spucriteria1;
        $TblSlpu->spucriteria2   = $req -> spucriteria2;
        $TblSlpu->spucriteria3   = $req -> spucriteria3;
        $TblSlpu->spucriteria4   = $req -> spucriteria4;
        $TblSlpu->spucriteria5   = $req -> spucriteria5;
        $TblSlpu->spucriteria6   = $req -> spucriteria6;
        $TblSlpu->save();
        return redirect('NewSlryPlanUnits');
    }

}
