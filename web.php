<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first',function(){
    return view('first');
});

//get data from url parameter
Route::get('/test/{id}',function($id){
echo $id;
return view('first');
});

//get call via controller

//Route::get('/user_home/{id}','App\Http\Controllers\User@index');
Route::get('/user_home',[User::class,'index']);
Route::get('/about','App\Http\Controllers\User@about');
Route::get('/service','App\Http\Controllers\User@service');
Route::get('/home','App\Http\Controllers\User@index');

//get the component page
Route::view('/pages','pages');
Route::view('/form','form');
Route::post('/formsubmit','App\Http\Controllers\form@index');
Route::view('/page2','page2');
Route::view('/page','user.page');
Route::view('/newtry','newtry');

//database ops
Route::get('/dbops',[dbcontroller::class,'index']);