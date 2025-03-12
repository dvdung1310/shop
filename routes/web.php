<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\UserAffiliatesController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductFrontendController;
use App\Http\Controllers\frontend\AuthFrontendController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'view'])->name('admin.login'); 
    Route::post('check-login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout.submit');


    Route::middleware(['checklogin'])->group(function () {
    
    Route::prefix('categories')->name('admin.categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index'); // Danh sách danh mục
        Route::get('/create', [CategoryController::class, 'create'])->name('create'); // Form thêm danh mục
        Route::post('/store', [CategoryController::class, 'store'])->name('store'); // Xử lý thêm danh mục
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit'); // Form chỉnh sửa danh mục
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update'); // Xử lý cập nhật danh mục
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy'); // Xóa danh mục
    });
    
    Route::prefix('products')->name('admin.products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });

    });
});

Route::prefix('affiliates')->name('admin.affiliates.')->group(function () {
    Route::get('/index', [UserAffiliatesController::class, 'index'])->name('index');
    Route::get('/create', [UserAffiliatesController::class, 'create'])->name('create');
    Route::post('/store', [UserAffiliatesController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserAffiliatesController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserAffiliatesController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [UserAffiliatesController::class, 'destroy'])->name('destroy');
});

// frontend
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dang-ky', [AuthFrontendController::class, 'view_register'])->name('view_register');
Route::get('/dang-nhap', [AuthFrontendController::class, 'view_login'])->name('view_login');
Route::post('/submit-dang-ky', [AuthFrontendController::class, 'register'])->name('register');
Route::post('/submit-dang-nhap', [AuthFrontendController::class, 'login'])->name('login');
Route::get('/ve-chung-toi', [ProductFrontendController::class, 'about'])->name('about');
Route::get('/gio-hang', [ProductFrontendController::class, 'cart'])->name('cart');
Route::get('/xoa-gio-hang/{id}', [ProductFrontendController::class, 'delete_cart'])->name('delete_cart');
Route::get('/{slug}', [ProductFrontendController::class, 'product_detail'])->name('product_detail');
Route::get('/add-cart/{product_id}', [ProductFrontendController::class, 'add_cart'])->name('add_cart');

Route::post('/thanh-toan', [ProductFrontendController::class, 'store_user_oder'])->name('store_user_oder');





