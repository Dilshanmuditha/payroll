<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblposition;

class NewPositionsController extends Controller
{
    //
    function SaveNewPositionsData(Request $req ){
        $TblPositions = new Tblposition;
        $TblPositions->pocode = $req -> PosCode;
        $TblPositions->podesc = $req -> PosName;
        $TblPositions->save();
        return redirect('NewPositions');
    }
}
