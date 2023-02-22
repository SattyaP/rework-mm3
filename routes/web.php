<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Config;
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
Route::prefix(Config::get("app.admin"))->group(function () {
    Route::redirect("/", Config::get("app.admin") . "/dashboard");
    Route::resource('dashboard', DashboardController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('event', EventController::class);
    Route::resource('blog', BlogController::class);
    Route::get('tag', TagController::class, 'index');
    Route::resource('home', HomeController::class);
});
