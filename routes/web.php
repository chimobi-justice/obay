<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MerchantRegisterController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\M\MerchantController;
use App\Http\Controllers\M\MerchantOrderController;
use App\Http\Controllers\C\CustomerOrderController;
use App\Http\Controllers\M\MerchantAccountController; 
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
Route::get('/food/details/{id}/{slug}', [MenuListDetails::class, 'show'])->name('food.details');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/food/details/{id}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.remove');
Route::delete('/empty/cart', [CartController::class, 'empty'])->name('cart.empty');

Route::get('/breakfast', [BreakfastController::class, 'index']);
Route::get('/dinner', [DinnerController::class, 'index']);
Route::get('/lunch', [LunchController::class, 'index']);

Route::group(['middleware' => 'guest'], function() {
    // customer register form
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    // end customer register form

    // merchant register form
    Route::get('/register/signup_account', [MerchantRegisterController::class, 'create'])->name('register.signup');
    Route::post('/register/signup_account', [MerchantRegisterController::class, 'store']);
    // end merchant register form

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
    Route::get('c/dashboard/orders', [CustomerOrderController::class, 'order'])->name('c.dashboard.order');
    
    Route::get('/c/dashboard/account', [AccountController::class, 'index'])->name('c.dashboard.account');
    Route::put('/c/dashboard/account/store', [AccountController::class, 'store'])->name('c.dashboard.account.store');
    Route::delete('/c/dashboard/account/delete', [AccountController::class, 'destroy'])->name('c.dashboard.account.destroy');
    Route::put('/c/dashboard/account/settings', [AccountController::class, 'updateSettings'])->name('c.dashboard.account.settings');
});
// end routes for customer

// routes for merchant
Route::group(['middleware' => 'auth'], function() {
    Route::get('/m/dashboard', [MerchantController::class, 'index'])->name('dashboard.index');
    Route::get('m/dashboard/food/create', [MerchantController::class, 'create'])->name('dashboard.create');
    Route::get('m/dashboard/orders', [MerchantOrderController::class, 'order'])->name('dashboard.order');
    Route::post('/m/dashboard/create', [MerchantController::class, 'store'])->name('dashboard.store');
    Route::get('/m/dashboard/{id}/{slug}', [MerchantController::class, 'show'])->name('dashboard.show');
    Route::delete('/m/dashboard/{food}', [MerchantController::class, 'destroy'])->name('dashboard.delete');

    Route::get('/m/dashboard/account', [MerchantAccountController::class, 'index'])->name('dashboard.account');
    Route::put('/m/dashboard/account/store', [MerchantAccountController::class, 'store'])->name('dashboard.account.store');
    Route::delete('/m/dashboard/account/delete', [MerchantAccountController::class, 'destroy'])->name('dashboard.account.destroy');
    Route::put('/m/dashboard/account/settings', [MerchantAccountController::class, 'updateSettings'])->name('dashboard.account.settings');
});
// end routes for merchant
