<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;

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


// Route::get('/', [NewController::class, 'index']);
// Route::get('/microsoft', [NewController::class, 'microsoft']);

//首頁
Route::get('/', [ShoppingCarController::class, 'bootstrap']);
Route::get('/checkout', [ShoppingCarController::class, 'checkout']);

// 購物車相關路由
Route::middleware(['auth'])->group(function () {
    Route::get('/shopping1', [ShoppingCartController::class, 'step01']);
    Route::post('/shopping2', [ShoppingCartController::class, 'step02']);
    Route::post('/shopping3', [ShoppingCartController::class, 'step03']);
    Route::post('/shopping4', [ShoppingCartController::class, 'step04']);
    Route::get('/show_order/{id}', [ShoppingCartController::class, 'show_order']); //展示訂單
});


//Comment  部分參考resfuk API  
Route::prefix('/comment')->group(function(){
    Route::get('/', [ShoppingCarController::class, 'comment']);
    Route::get('/delete/{id}', [ShoppingCarController::class, 'delete_comment']);
    Route::get('/edit/{id}', [ShoppingCarController::class, 'edit_comment']);
    Route::get('/update/{id}', [ShoppingCarController::class, 'update_comment']);
    Route::get('/save', [ShoppingCarController::class, 'save_comment']);

});

//Banner  部分參考resfuk API  
Route::prefix('/banner')->middleware(['auth'])->group(function(){ //Banner管理相關路由 （手動建立版本）
    Route::get('/', [BannerController::class, 'index']); // 總表、列表頁
    Route::get('/create', [BannerController::class, 'create']); // 新增頁
    Route::post('/store', [BannerController::class, 'store']); // 儲存
    Route::get('/edit/{id}', [BannerController::class, 'edit']); // 編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']); // 更新
    Route::post('/delete/{id}', [BannerController::class, 'destroy']); // 刪除
});


//Product 後台  部分參考resfuk API  
Route::prefix('/product')->middleware(['auth'])->group(function(){ //Product管理相關路由 （手動建立版本）
    Route::get('/', [ProductController::class, 'index']); // 總表、列表頁
    Route::get('/create', [ProductController::class, 'create']); // 新增頁
    Route::post('/store', [ProductController::class, 'store']); // 儲存
    Route::get('/edit/{id}', [ProductController::class, 'edit']); // 編輯頁
    Route::post('/update/{id}', [ProductController::class, 'update']); // 更新
    Route::post('/delete/{id}', [ProductController::class, 'destroy']); // 刪除
    Route::delete('/delete_img/{img_id}', [ProductController::class, 'delete_img']); // 刪除次要圖片
    // 對應到 html 的 @method('DELETE')
});


//Product 前台
Route::get('/ProductPage/{id}', [ProductController::class, 'ProductPage']);

// 接受加入購物車請求
Route::post('/add_to_cart', [ShoppingCartController::class, 'add_cart']);
Route::post('/delete_from_cart/{id}', [ShoppingCartController::class, 'delete_cart']);


// 會員管理相關路由
Route::prefix('/account')->middleware(['auth','power'])->group(function () {
    Route::get('/', [AccountController::class, 'index']); //總表,列表頁 = Read
    Route::get('/create', [AccountController::class, 'create']); //新增頁 C
    Route::post('/store', [AccountController::class, 'store']); //儲存 C
    Route::get('/edit/{id}', [AccountController::class, 'edit']); //編輯頁 U
    Route::post('/update/{id}', [AccountController::class, 'update']); //更新  U
    Route::delete('/delete/{id}', [AccountController::class, 'destroy']); //刪除 D
});

// 訂單管理相關路由
Route::prefix('/order')->middleware(['auth','power'])->group(function () {
    Route::get('/', [OrderController::class, 'index']); //總表,列表頁 = Read
    Route::get('/edit/{id}', [OrderController::class, 'edit']); //編輯頁 U
    Route::post('/update/{id}', [OrderController::class, 'update']); //更新  U
});



//後台首頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');


//登入相關路由
require __DIR__.'/auth.php';