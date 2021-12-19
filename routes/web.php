<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\C\DashboardController;
use App\Http\Controllers\C\AccountController;
use App\Http\Controllers\C\Meals\BurgerController;
use App\Http\Controllers\C\Meals\BreadController;
use App\Http\Controllers\C\Meals\BunController;
use App\Http\Controllers\C\Meals\FrenchFriesController;
use App\Http\Controllers\C\Meals\RiceController;
use App\Http\Controllers\C\Meals\PizzaController;
use App\Http\Controllers\MenuListView;
use App\Http\Controllers\MenuListDetails;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Categories\BreakfastController;
use App\Http\Controllers\Categories\DinnerController;
use App\Http\Controllers\Categories\LunchController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/our-menu', [MenuListView::class, 'index']);
Route::get('/food/details/{id}', [MenuListDetails::class, 'show'])->name('food.details');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/food/details/{id}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.remove');
Route::delete('/empty/cart', [CartController::class, 'empty'])->name('cart.empty');

Route::get('/breakfast', [BreakfastController::class, 'index']);
Route::get('/dinner', [DinnerController::class, 'index']);
Route::get('/lunch', [LunchController::class, 'index']);

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [sessionController::class, 'create'])->name('login');
    Route::post('/login', [sessionController::class, 'store']);
});

Route::post('/logout', [sessionController::class, 'destroy'])->name('logout')->middleware('auth');

// routes for customer
Route::group(['middleware' => 'auth'], function() {
    Route::get('/c/dashboard', [DashboardController::class, 'index'])->name('c.dashboard');
    Route::get('/c/dashboard/cart', [DashboardController::class, 'cart'])->name('c.dashboard.cart');
    Route::get('/c/dashboard/food/details/{id}', [DashboardController::class, 'show'])->name('c.dashboard.food.details');
    Route::post('/c/dashboard/food/details/{id}', [DashboardController::class, 'store'])->name('c.dashboard.cart.store');
    Route::delete('/c/dashboard/cart/{id}', [DashboardController::class, 'destroy'])->name('c.dashboard.cart.remove');
    Route::delete('/c/dashboard/empty/cart', [DashboardController::class, 'empty'])->name('c.dashboard.cart.empty');
    
    Route::get('/c/dashboard/meals/burgers', [BurgerController::class, 'index'])->name('c.dashboard.meals.burger');
    Route::get('/c/dashboard/meals/bun', [BunController::class, 'index'])->name('c.dashboard.meals.bun');
    Route::get('/c/dashboard/meals/breads', [BreadController::class, 'index'])->name('c.dashboard.meals.bread');
    Route::get('/c/dashboard/meals/rice', [RiceController::class, 'index'])->name('c.dashboard.meals.rice');
    Route::get('/c/dashboard/meals/french-fries', [FrenchFriesController::class, 'index'])->name('c.dashboard.meals.french-fries');
    Route::get('/c/dashboard/meals/pizzas', [PizzaController::class, 'index'])->name('c.dashboard.meals.pizzas');
    
    Route::get('/c/dashboard/account', [AccountController::class, 'index'])->name('c.dashboard.account');
    Route::put('/c/dashboard/account', [AccountController::class, 'store']);
    Route::delete('/c/dashboard/account', [AccountController::class, 'destroy'])->name('c.dashboard.account.destroy');
    Route::put('/c/dashboard/account', [AccountController::class, 'updateSettings'])->name('c.dashboard.account.settings');
});
// end routes for customer
