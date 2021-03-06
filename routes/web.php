<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/login' , [ AuthController::class , 'showFormLogin'])->name('showFormLogin');
Route::post('/login' ,[AuthController::class , 'checkLogin'] )->name('submitLogin');
Route::get('/registration' ,[AuthController::class , 'showFormRegistration'])->name('showFormRegistration');
Route::post('/registration' ,[AuthController::class , 'registration'] )->name('registration');


Route::middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('content');
    })->name('home');

    Route::get('/logout' , function (){
        echo 123;
    })->name('logout');

    Route::prefix('users')->group(function (){
        Route::get('list',[UserController::class,'index'])->name('users.list');
        Route::get('{id}/show',[UserController::class,'show'])->name('users.show');
    });
});




