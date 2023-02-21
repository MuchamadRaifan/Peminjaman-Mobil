<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\ImageController;

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

Route::get('/detail', function () {
    return view('landing.detail');
});

Route::get('/', function () {
    return view('landing.welcome');

});

Route::resource('dashboard', LaptopController::class)->middleware('isLogin');;

Route::get('/login' ,[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authanticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/image', [ImageController::class, 'index'])->name('image.index');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');
