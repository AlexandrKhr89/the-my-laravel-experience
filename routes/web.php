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

//Route::get('/', function () {
//    return view('welcome');
//});

//1. Все сработало, нехватало 'App\Http\Controllers\
//Route::get('/', 'App\Http\Controllers\StartController@index');

//2. Все сработало, был лишний символ в 'namespace'
Route::group(['namespace' => 'App\Http\Controllers'], function (){
    Route::get('/', 'StartController@index');
});


