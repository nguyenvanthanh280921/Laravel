<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CustomerController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/add',[CustomerController::class,'add']);
Route::get('/customer/edit/{id}',[CustomerController::class,'edit']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete']);
Route::get('/customer/save', [CustomerController::class, 'save']);