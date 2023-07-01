<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// * USERS
Route::get('/users', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);

Route::get('/users/add_product', [UserController::class, 'add_product']);
Route::post('/users/assign', [UserController::class, 'assign']);


// * PRODUCTS
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/', function () {
    return view('home');
});
