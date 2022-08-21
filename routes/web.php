<?php

use App\Http\Controllers\HomeController;
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
//Home Page
Route::get('/' , [HomeController::class , 'index'])->name('home');



//Route::get('getServiceDetails/{id}', [HomeController::class , 'getServiceDetails'])->name('getServiceDetails');

Route::get('get-price/{id}', [HomeController::class , 'getPrice']);

Route::get('order', [HomeController::class, 'order'])->name('order');