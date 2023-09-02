<?php

use App\Http\Controllers\Studencontroller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('create',[Studencontroller::class,'create']);
Route::post('create-post',[Studencontroller::class,'createpost']);
Route::get('index',[Studencontroller::class,'index']);
Route::get('edit/{id}',[Studencontroller::class,'edit']);
Route::post('update',[Studencontroller::class,'update']);
Route::get('delete/{id}',[Studencontroller::class,'delete']);