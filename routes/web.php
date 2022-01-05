<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [PagesController::class,'index']);

Route::resource('employees', 'App\Http\Controllers\EmployeesController');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
