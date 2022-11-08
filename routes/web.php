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

Route::get('/ts', function () {

    notify()->error('Laravel Notify is awesome!');

    return redirect()->back();
});

Auth::routes();




Route::middleware(['auth'])->group(function () {
    //
    Route::get('/home', [App\Http\Controllers\NftController::class, 'index'])->name('home');
    Route::get('/nft/{ref}', [App\Http\Controllers\NftController::class, 'create'])->name('home');
    Route::get('/createnft', [App\Http\Controllers\NftController::class, 'createnft'])->name('createnft');
    Route::post('/nftpost', [App\Http\Controllers\NftController::class, 'postnft'])->name('postnft');
    Route::post('/startselling', [App\Http\Controllers\MarketplaceController::class, 'store'])->name('store');
    Route::get('/buynft/{ref}', [App\Http\Controllers\MarketplaceController::class, 'buynft'])->name('buynft');

    Route::post('/postbuynft/{ref}', [App\Http\Controllers\MarketplaceController::class, 'purchase'])->name('postbuynft');

});