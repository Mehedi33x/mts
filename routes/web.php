<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainController;
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

//backend
//Dashboard
Route::get('/',[HomeController::class,'dashboard'])->name('/');

//user
Route::get('/user',[UserController::class,'user'])->name("user");
Route::get('user/add_user',[UserController::class,'useradd'])->name('user.add');
Route::post('/user/store',[UserController::class,'submit'])->name('user.submit');


//train
// Route::get('/train',[TrainController::class,'train'])->name('train');
Route::get('/train/add_train',[TrainController::class,'addtrain'])->name('train.add');
//train post
Route::post('/train/add_train',[TrainController::class,'store'])->name('train.store');

Route::get('/fetch_train',[TrainController::class,'fetch'])->name('fetch');