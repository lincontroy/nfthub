<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\RequestController;

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
Route::post('v1/request', [RequestController::class, 'sendstk']);

Route::post('v1/response', [RequestController::class, 'response']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

//     return $request->user();
    
// });

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/user', function(Request $request){
        return $request->user();
    });

    Route::post('/deposit', [DepositController::class, 'create_transaction']);



});