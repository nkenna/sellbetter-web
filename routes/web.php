<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SettingController;

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

Route::get('/signup', [signupcontroller::class, 'open']);
Route::get('/', [SigninController::class, 'open']);
Route::get('/signin', [SigninController::class, 'open']);
Route::get('/dashboard/{userId}', [DashboardController::class, 'open']);
Route::get('/record/{userId}', [RecordController::class, 'open']);
Route::get('/setting/{userId}', [SettingController::class, 'open']);

Route::get('/verify/{code}', [signupcontroller::class, 'verify']);

Route::post('/login-form', [SigninController::class, 'login']);
Route::post('/signup-form', [signupcontroller::class, 'signup']);

Route::post('/make-sale', [DashboardController::class, 'makeSale']);

