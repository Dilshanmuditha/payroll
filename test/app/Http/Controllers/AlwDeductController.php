<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblad;

class AlwDeductController extends Controller
{
    //
    function SaveNewADListData(Request $req ){
        //return $req->input();
        $TblADlist = new Tblad;
        $TblADlist->adlog = $req -> txtad;
        $TblADlist->adcode = $req -> AlwCode;
        $TblADlist->addesc  = $req -> AlwName;
        $TblADlist->save();
        return redirect('NewAllowses');
    }

}
