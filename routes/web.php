<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\DressController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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
Route::resource('/deshboard',BackendController::class);
Route::resource('/dress',DressController::class);
Route::resource('/order',OrderController::class);
Route::resource('/user',UserController::class);
