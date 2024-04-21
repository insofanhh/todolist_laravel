<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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

//Home
Route::get('/', [HomeController::class, 'welcome']);
//User
Route::get('login',[UserController::class, 'login']);
Route::post('login',[UserController::class,'logininto']);
Route::get('register',[UserController::class,'register']);
Route::post('register',[UserController::class,'createaccount']);

//Todolist
Route::get('todos',[TodosController::class, 'index']);
Route::get('todo/{todo}','App\Http\Controllers\TodosController@show');
Route::get('new-todos', 'App\Http\Controllers\TodosController@create');
Route::post('store-todos','App\Http\Controllers\TodosController@store');

Route::get('todos/{todo}/edit','App\Http\Controllers\TodosController@edit');
Route::post('todos/{todo}/update-todos','App\Http\Controllers\TodosController@update');

Route::get('todos/{todo}/delete','App\Http\Controllers\TodosController@destroy');