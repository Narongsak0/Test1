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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/showdetail/{name}/{age}/{At}", function ($name,$age,$At) {
//     return "สวัสดี $name คุณมีอายุ $age ปี และคุณพูดว่า $At";
// });

// Route::get('/', 'HomeController@index');
// Route::get('/greeting/{name}', 'HomeController@greeting');

// Route::get("/บวกเลข/{num1}/{num2}/{num3}", 'HomeController@calculate');

Route::get('/user', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/update/{id}', 'UserController@update');

Route::get('/todo', 'TodController@index');
Route::get('/todo/show/{id}', 'TodController@show');
Route::get('/todo/delete/{id}', 'TodController@delete');
