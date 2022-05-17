<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JournalController;



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

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/all-product', [ProductController::class, 'allProduct']);
Route::post('/post-login', 'App\Http\Controllers\AuthController@login')->name('post-login');
Route::post('/post-register', 'App\Http\Controllers\AuthController@store')->name('post-register');
// Route::post('/post-login', [AuthController::class, 'login']);
Route::resource('auth', AuthController::class);
Route::resource('product', ProductController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('journal', JournalController::class);



