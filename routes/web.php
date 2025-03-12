<?php

use App\Http\Controllers\Admin\MainController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Support\Facades\Route;
 
Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        // Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('/main',[MainController::class,'index']);
        #menu
        Route::prefix('menu')->group(function(){
            Route::get('add',[MenuController::class,'create']);
            Route::post('add',[MenuController::class,'store']);
            Route::get('list',[MenuController::class,'index']);
            Route::get('edit/{menu}',[MenuController::class,'show']);
            Route::post('edit/{menu}',[MenuController::class,'update']);
            Route::delete('destroy',[MenuController::class,'destroy']);

        }); 

        #product
        Route::prefix('products')->group(function(){
            Route::get('/add',[ProductController::class,'create']);
            Route::post('/add',[ProductController::class,'add']);
            Route::get('list',[ProductController::class,'index']);
            Route::get('edit/{product}',[ProductController::class,'show']);
            Route::post('edit/{product}',[ProductController::class,'update']);
            Route::delete('destroy',[ProductController::class,'destroy'])->name('admin.products.destroy');


        }); 



    }); 


});

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('product',[ControllersProductController::class,'index']);
Route::get('product/{id}',[ControllersProductController::class,'show']);
Route::get('cart',[CartController::class,'index']);
Route::get('cart/add/{id}',[CartController::class,'add'])->name('cart.add');



