<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/fottballapi',[\App\Http\Controllers\API\FootballerControllerApi::class,'index']);
Route::post('/fottballcreateapi',[\App\Http\Controllers\API\FootballerControllerApi::class,'create']);
Route::get('/fottballapi/{id}',[\App\Http\Controllers\API\FootballerControllerApi::class,'findId']);
Route::post('/fottballupdateapi/{id}',[\App\Http\Controllers\API\FootballerControllerApi::class,'update']);
Route::post('/fottballdeleteapi/{id}',[\App\Http\Controllers\API\FootballerControllerApi::class,'delete']);
Route::post('register',[\App\Http\Controllers\api\authapicontroller::class,'register']);
Route::post('login',[\App\Http\Controllers\api\authapicontroller::class,'login']);

Route::group(['middleware'=>'auth:api'],function (){
    Route::get('emps',[\App\Http\Controllers\api\employeecontroller::class,'index']);

});





