<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});


Route::get('login',[UserController::class, 'login']);
Route::post('login',[UserController::class, 'loginUser']);
Route::post('logout',[UserController::class, 'logout']);

Route::get('register',[RegisterController::class, 'register']);
Route::post('register',[RegisterController::class, 'createUser']);

Route::get('dashboard',[UserController::class, 'dashboard']);

Route::get('profile',[UserController::class, 'profile']);
Route::get('settings',[UserController::class, 'settings']);
Route::get('newsletter',[UserController::class, 'newsletter']);
Route::get('mypage',[UserController::class, 'mypage']);


