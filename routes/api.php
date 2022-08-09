<?php

use App\Http\Controllers\PelaporanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditTrailController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// middleware('auth:sanctum')->
// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});

//pelaporan api
Route::get('pelaporan-view',[PelaporanController::class,'index']);
Route::get('pelaporan-create',[PelaporanController::class,'create']);
Route::get('pelaporan-delete',[PelaporanController::class,'delete']);

//audittrail
Route::get('audittrail-view',[AuditTrailController::class,'index']);
