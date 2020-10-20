<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/',[MainController::class,'home']);
Route::get('/list',[MainController::class,'list']);
Route::get('/registration',[MainController::class,'registration']);
Route::post('/store',[MainController::class,'store']);
Route::post('/logs',[MainController::class,'logs']);

Route::get('/login',[MainController::class,'login']);

Route::get('/add',[MainController::class,'add']);
Route::post('/addValue',[MainController::class,'addValue']);

Route::get('/edit/{id}',[MainController::class,'edit']);
Route::post('/update',[MainController::class,'update']);
Route::post('/delete',[MainController::class,'delete']);
Route::get('/logout',[MainController::class,'logout']);
