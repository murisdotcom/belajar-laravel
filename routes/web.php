<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserAccMenuController;


/*
|- ---- ----------------------------------------------------- ----- -----------
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

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// users
Route::get('/', [UserController::class, 'index'])->middleware('auth');
Route::get('/users',[UserController::class,'users'])->middleware('auth');
Route::get('/jsonUsers',[UserController::class,'jsonUsers'])->middleware('auth');

// menus
Route::get('/menus',[MenuController::class,'menus'])->middleware('auth');
Route::get('/jsonMenus',[MenuController::class,'jsonMenus'])->middleware('auth');

// UserAccMenu
Route::get('/userAccMenu',[UserAccMenuController::class,'userAccMenu'])->middleware('auth');
Route::get('/jsonUserAccMenu',[UserAccMenuController::class,'jsonUserAccMenu'])->middleware('auth');

Route::post('/uploadImage',[UserController::class,'uploadImage'])->name('uploadImage');
