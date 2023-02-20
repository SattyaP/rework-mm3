<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SiswaController;
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

Route::resource('dashboard', DashboardController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('event', EventController::class);
