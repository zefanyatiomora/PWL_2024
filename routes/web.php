<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\POSProductsController;
use App\Http\Controllers\POSHomeController;
use App\Http\Controllers\POSUserController;
use App\Http\Controllers\POSPenjualanController;
Route::get('/penjualan', [POSPenjualanController::class, 'penjualan']);
Route::get('/user_pos/{id}/name/{name}', [POSUserController::class, 'user']);
Route::get('/home',[POSHomeController::class,'home']);
Route::get('/category/food_beverage', [POSProductsController::class, 'food_beverage']);
Route::get('/category/beauty_health', [POSProductsController::class, 'beauty_health']);
Route::get('/category/home_care', [POSProductsController::class, 'home_care']);
Route::get('/category/baby_kid', [POSProductsController::class, 'baby_kid']);




    

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

