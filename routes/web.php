<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('tier1', [App\Http\Controllers\NftController::class, 'addpricevaluetier1']);
Route::get('tier2', [App\Http\Controllers\NftController::class, 'addpricevaluetier2']);
Route::get('tier3', [App\Http\Controllers\NftController::class, 'addpricevaluetier3']);


Route::get('/ts', function () {

    notify()->error('Laravel Notify is awesome!');

    return redirect()->back();
});

Auth::routes();

Route::get('register/{ref}', [App\Http\Controllers\Auth\RegisterController::class, 'index']);



Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){

    Route::get('/createnft', [App\Http\Controllers\NftController::class, 'createnft'])->name('createnft');
    Route::post('/nftpost', [App\Http\Controllers\NftController::class, 'postnft'])->name('postnft');
    Route::get('/deposits',[App\Http\Controllers\DepositsController::class, 'confirm'])->name('confirm');
    Route::get('/approve/deposit/{id}',[App\Http\Controllers\DepositsController::class, 'approve'])->name('approve');
    Route::get('/reject/deposit/{id}',[App\Http\Controllers\DepositsController::class, 'reject'])->name('reject');

});


Route::middleware(['auth'])->group(function () {
    //
    Route::get('/home', [App\Http\Controllers\NftController::class, 'index'])->name('home');
    Route::get('/nft/{ref}', [App\Http\Controllers\NftController::class, 'create'])->name('home');
    
    Route::post('/startselling', [App\Http\Controllers\MarketplaceController::class, 'store'])->name('store');
    Route::get('/buynft/{ref}', [App\Http\Controllers\MarketplaceController::class, 'buynft'])->name('buynft');
    Route::post('/postbuynft/{ref}', [App\Http\Controllers\MarketplaceController::class, 'purchase'])->name('postbuynft');



    //user deposit 
    Route::get('/deposit', [App\Http\Controllers\DepositsController::class, 'index'])->name('deposit');

    Route::post('/deposit/post', [App\Http\Controllers\DepositsController::class, 'store'])->name('store');

    Route::get('/user/deposits', [App\Http\Controllers\DepositsController::class, 'show'])->name('show');
});
