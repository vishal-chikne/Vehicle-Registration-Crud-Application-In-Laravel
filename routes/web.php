<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostviewController;
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





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['Middleware' => ['auth','admin']], function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role',[DashboardController::class,'index']);

});

Route::view('home','post');
Route::post('home',[PostController::class,'addData']);

Route::get('home',[PostviewController::class,'show']);
Route::put('/homee/{id}',[PostController::class,'update']);
Route::get('/homeee/{id}',[PostController::class,'delete']);