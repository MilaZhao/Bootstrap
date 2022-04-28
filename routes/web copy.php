<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FilesController;





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
Route::get('/comment', [ShoppingCarController::class, 'comment']);

Route::get('/comment/delete/{id}', [ShoppingCarController::class, 'delete_comment']);
Route::get('/comment/edit/{id}', [ShoppingCarController::class, 'edit_comment']);
Route::get('/comment/update/{id}', [ShoppingCarController::class, 'update_comment']);



Route::get('/comment/save', [ShoppingCarController::class, 'save_comment']);
// get 可以換成 post之類的....

//Banner  部分參考resfuk API  
Route::prefix('/banner')->group(function(){ //Banner管理相關路由 （手動建立版本）
    Route::get('/', [BannerController::class, 'index']); // 總表、列表頁
    Route::get('/create', [BannerController::class, 'create']); // 新增頁
    Route::post('/store', [BannerController::class, 'store']); // 儲存
    Route::get('/edit/{id}', [BannerController::class, 'edit']); // 編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']); // 更新
    Route::post('/delete/{id}', [BannerController::class, 'destroy']); // 刪除
});


//Product  部分參考resfuk API  
Route::prefix('/product')->group(function(){ //Product管理相關路由 （手動建立版本）
    Route::get('/', [ProductController::class, 'index']); // 總表、列表頁
    Route::get('/create', [ProductController::class, 'create']); // 新增頁
    Route::post('/store', [ProductController::class, 'store']); // 儲存
    Route::get('/edit/{id}', [ProductController::class, 'edit']); // 編輯頁
    Route::post('/update/{id}', [ProductController::class, 'update']); // 更新
    Route::post('/delete/{id}', [ProductController::class, 'destroy']); // 刪除
   
    Route::delete('/delete_img/{img_id}', [ProductController::class, 'delete_img']); // 刪除次要圖片
    // 對應到 html 的 @method('DELETE')
    

});












