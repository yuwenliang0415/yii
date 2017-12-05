<?php

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
Route::get("/login","IndexController@login");
Route::get("/aa","IndexController@a");
Route::any("/logindo","IndexController@login_do");
Route::any("/pl","IndexController@show");
Route::any("/del","IndexController@del");
Route::any("/up","IndexController@up");
Route::any("/upmsg","IndexController@upmsg");
Route::any("/rc","DayController@addmsg");
Route::any("/msgs","DayController@msgs");