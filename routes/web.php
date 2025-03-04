<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\AuthController;

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

Route::get("", function(){
    return view("frontend.home");
 });





