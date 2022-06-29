<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HqController;
use App\Http\Controllers\IncController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\UserController;


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

Route::resource('complainer', complaincontroller::class)->middleware('auth');
Route::resource('police_add', AddPolicecontroller::class)->middleware('auth');
Route::resource('police_station_add', AddPoliceStationcontroller::class)->middleware('auth');


Route::resource('todo', Todocontroller::class)->middleware('auth');
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'hq', 'middleware'=>['isHq','auth','PreventBackHistory']], function(){
    Route::get('headHome',[Hqcontroller::class,'index'])->name('hq.dashboard');
    Route::get('head_case_details',[Hqcontroller::class,'detail'])->name('hq.detail');
    Route::get('head_view_policestation',[Hqcontroller::class,'view'])->name('hq.view');
    Route::get('police_station_add',[Hqcontroller::class,'add'])->name('hq.add');

    
});
Route::group(['prefix'=>'inc', 'middleware'=>['isInc','auth','PreventBackHistory']], function(){
    Route::get('incharge_complain_detail',[Inccontroller::class,'index'])->name('inc.dashboard');
    Route::get('incharge_complain_page',[Inccontroller::class,'page'])->name('inc.page');
    Route::get('incharge_view_police',[Inccontroller::class,'view'])->name('inc.view');
    Route::get('police_add',[Inccontroller::class,'add'])->name('police.add');
    
});
Route::group(['prefix'=>'police', 'middleware'=>['isPolice','auth','PreventBackHistory']], function(){
    Route::get('police_complain_detail',[Policecontroller::class,'index'])->name('police.dashboard');
    Route::get('police_complete',[Policecontroller::class,'done'])->name('police.done');
    Route::get('police_pending_complain',[Policecontroller::class,'pending'])->name('police.pending');
    
});
Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('complainer',[Usercontroller::class,'index'])->name('user.dashboard');
    Route::get('complain_details',[Usercontroller::class,'details'])->name('user.details');
    Route::get('complain_history',[Usercontroller::class,'history'])->name('user.history');
});
