<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ShoppingCarController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('welcome');
// });
// Route::get('/say', function () {
//     return 'Hello world';
// });

// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/', [NewController::class, 'index']);
Route::get('/microsoft', [NewController::class, 'microsoft']);
Route::get('/bootstrap', [ShoppingCarController::class, 'bootstrap']);
Route::get('/login', [ShoppingCarController::class, 'login']);
Route::get('/checkout', [ShoppingCarController::class, 'checkout']);




