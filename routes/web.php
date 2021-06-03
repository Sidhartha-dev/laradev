<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllCategoryShowController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingPageController::class, 'index'])->name('category.index');
Route::get('/all-categories/{category}', [AllCategoryShowController::class, 'categoryProduct'])->name('category.show');
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

    //brands
    Route::get('brands', [BrandsController::class, 'brandlist'])->name('brand.index');
    Route::get('brands/create', [BrandsController::class, 'brandcreate'])->name('brand.create');
    Route::post('brands', [BrandsController::class, 'brandstore'])->name('brand.store');
    Route::delete('brands/{id}', [BrandsController::class, 'destroy'])->name('brand.destroy');

    //points
    Route::get('points', [PointsController::class, 'PointIndex'])->name('point.index');
    Route::get('points/add', [PointsController::class, 'PointAdd'])->name('point.add');
    Route::post('points', [PointsController::class, 'PointStore'])->name('points.store');
    Route::delete('points/{id}', [PointsController::class, 'destroypoints'])->name('point.destroy');

});

//allcategoryshow
Route::get('/all-categories', [AllCategoryShowController::class, 'allCategory'])->name('allcategory.index');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/complete-point', [HomeController::class, 'completeindex'])->name('point.complete')->middleware('auth');
Route::get('/home/{id}', [HomeController::class, 'pointshow'])->name('point.show')->middleware('auth');
Route::put('home/{id}', [HomeController::class, 'updatePoints'])->name('point.update')->middleware('auth');
Route::get('/earnings', [HomeController::class, 'earningshow'])->name('earn.money')->middleware('auth');


