<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllCategoryShowController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingPageController::class, 'index'])->name('category.index');
Route::get('/all-categories/{category}', [LandingPageController::class, 'categoryProduct'])->name('category.show');
// Route::get('/', [LandingPageController::class, 'productIndex'])->name('productIndex.index');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index'); 
Route::get('products/{product}', [ProductsController::class, 'showProduct'])->name('product.show');
Auth::routes();
Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });

    //users
    Route::get('dashboard/users', [UserController::class, 'userList'])->name('users.name');

    //categorys
    Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //ADMIN SIDE
    Route::get('my-products/create', [AdminController::class, 'createProduct'])->name('myproduct.create');
    Route::post('my-products', [AdminController::class, 'productStore'])->name('myproduct.store');
    Route::get('my-products/{product}/edit', [AdminController::class, 'editProduct'])->name('product.edit');
    Route::put('my-products/{product}', [AdminController::class, 'productUpdate'])->name('myproduct.update');
    Route::get('my-products', [AdminController::class, 'productAll'])->name('product.list');
    Route::get('my-products/{product}', [AdminController::class, 'productAdminShow'])->name('myproduct.show');
    Route::delete('my-products/{id}', [AdminController::class, 'destroyProduct'])->name('product.destroy');
});

//allcategoryshow
Route::get('/all-categories', [AllCategoryShowController::class, 'allCategory'])->name('allcategory.index');



Route::get('/home', 'HomeController@index')->name('home');


