<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\EventPhotoController;
use App\Http\Controllers\DaftarNamaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomePageController;
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

Route::get('/', [HomePageController::class, 'index']);
Route::get('gallery', [GalleryController::class, 'index']);
Route::get('daftar-nama', [DaftarNamaController::class, 'index']);
Route::get('/blog/{slug}',[HomePageController::class, 'show']);
Route::resource('home', HomePageController::class);

Route::get('404', function () { return view('404'); });

Route::group( 
    ['prefix' => 'admin','middleware' => ['auth']],
        function() {
            Route::resource('dashboard', DashboardController::class)->middleware('checkRole:admin');
            Route::resource('siswa', SiswaController::class)->middleware('checkRole:admin');
            Route::resource('event', EventController::class)->middleware('checkRole:admin');
            Route::resource('photo', EventPhotoController::class)->middleware('checkRole:admin');
            Route::resource('blog', BlogController::class)->middleware('checkRole:admin');
            Route::get('tag', TagController::class, 'index')->middleware('checkRole:admin');
        }   
    );

Auth::routes();


