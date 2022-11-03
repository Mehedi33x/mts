<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//backend
Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[HomeController::class,'dashboard']);

//user
Route::get('/user',[UserController::class,'user']);
Route::get('/add',[UserController::class,'useradd']);
Route::post('/user/store',[UserController::class,'submit'])->name('user.submit');