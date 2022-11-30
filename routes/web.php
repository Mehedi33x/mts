<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StationController;
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


// backend
//Login
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login/post',[AuthController::class,'do_login'])->name('do_login');
Route::group(['middleware'=>'auth'],function()
//middleware
{
//Dashboard
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

//user
Route::get('/user',[UserController::class,'user'])->name('user');
Route::get('/user/add_user',[UserController::class,'useradd'])->name('user.add');
Route::post('/user/store',[UserController::class,'submit'])->name('user.submit');
Route::get('/user/delete/{user_id}',[UserController::class,'userDelete'])->name('user.delete');
Route::get('/user/view/{user_id}',[UserController::class,'viewuser'])->name('user.view');

//train
Route::get('/train/add_train',[TrainController::class,'addtrain'])->name('train.add');
Route::post('/train/add_train',[TrainController::class,'store'])->name('train.store');
Route::get('/fetch_train',[TrainController::class,'fetch'])->name('fetch'); 

//station
Route::get('/station',[StationController::class,'station'])->name('station');
Route::get('/station/add_station',[StationController::class,'add_station'])->name('add.station');
Route::post('/station/add_staion',[StationController::class,'store'])->name('station.store');

//
Route::get('/dashboard/ticket-list',[TicketController::class,'ticket'])->name('ticket.list');


});


