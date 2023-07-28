<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizeController;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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
//Route::get('/login', 'AuthorizeController@showLoginForm');
Route::post('/login', [AuthorizeController::class, 'showLoginForm']);
//Route::post('/login', 'AuthorizeController@login');
Route::post('/login', [AuthorizeController::class, 'login']);
//Route::post('/register', 'AuthController@ShowRegistForm');
Route::post('/register', [AuthorizeController::class, 'ShowRegistForm']);
//Route::get('/main', 'MainController@index');
Route::post('/main', [MainController::class, 'index']);


//Route::get("/", function(){
   // echo 'все работает';
//});