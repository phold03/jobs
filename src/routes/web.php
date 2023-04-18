<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'Home', 'prefix' => 'home'], function () {
    Route::get('/',[HomeController::class, 'index']);
});

Route::group(['namespace' => 'Jobs', 'prefix' => 'jobs'], function () {
    Route::get('/',[JobsController::class, 'index']);
    Route::get('/detail',[JobsController::class, 'detail']);
});
