<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateNewEmployee;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\NewPositionsController;
use App\Http\Controllers\AlwDeductController;
use App\Http\Controllers\SalaryPlanCashController;
use App\Http\Controllers\SalaryPlanUnitsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view("forms","forms-elements");

Route::view("home",'home');

Route::view("register",'register');

Route::view("NewEmployee",'CreateNewEmployee'); 
Route::post("NewEmployee",[CreateNewEmployee::class,'SaveNewEmployeeData']);
Route::get("NewEmployee",[PositionController::class,'ShowPositions']);

Route::get('list',[MemberController::class,'show']);

//Route::view("depa",'department');
//Route::get("depa",[DepartmentController::class,'showt']);
//Route::get("NewEmployee",[DepartmentController::class,'showt']);
//Route::get("depa",[PositionController::class,'ShowPositions']);

Route::view("NewPositions",'CreateNewPositions');
Route::post("NewPositionsSave",[NewPositionsController::class,'SaveNewPositionsData']);

Route::get("NewDepartments",[DepartmentController::class,'showDepartmentdata']);
Route::post("NewDepartments",[DepartmentController::class,'SaveNewDepartsData']);
Route::get("DepartmentPdf",[DepartmentController::class,'deparmentsPdf']);


Route::view("NewAllowses",'CreateNewAllownses');
Route::post("NewAllownses",[AlwDeductController::class,'SaveNewADListData']);

Route::view("NewDeductions",'CreateNewDeductions');
Route::post("NewDeductions",[AlwDeductController::class,'SaveNewADListData']);

Route::view("NewSlryPlanCash",'CreateNewSlryPlanCash');
Route::post("NewSlryPlanCash",[SalaryPlanCashController::class,'SaveNewSlryPlanCashData']);

Route::view("NewSlryPlanUnits",'CreateNewSlryPlanUnits');
Route::post("NewSlryPlanUnits",[SalaryPlanUnitsController::class,'SaveNewSlryPlanUnitsData']);

Route::view("datatable",'datatable');

Route::view("DepartmentsList",'ListDepartments');
Route::get("DepartmentsList",[DepartmentController::class,'ShowDepartmentList']);

Route::view("test",'test');
Route::get("test",[DepartmentController::class,'ShowDepartmentList']);