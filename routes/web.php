<?php

use App\Http\Controllers\lrcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('signup',[lrcontroller::class,'index']);
Route::post('/signup',[lrcontroller::class,'create'])->name('createuser');
Route::get('login',[lrcontroller::class,'indo']);
Route::post('/login',[lrcontroller::class,'login'])->name('userlogin');