<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\C\DashboardController;
use App\Http\Controllers\MenuListView;
use App\Http\Controllers\MenuListDetails;

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
    return view('home');
});

Route::get('/our-menu', [MenuListView::class, 'index']);
Route::get('/food/details/{id}', [MenuListDetails::class, 'index']);

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    
    Route::get('/login', [sessionController::class, 'create'])->name('login');
    Route::post('/login', [sessionController::class, 'store']);
});

Route::post('/logout', [sessionController::class, 'destroy'])->name('logout')->middleware('auth');
Route::get('/c/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

