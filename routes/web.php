<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Website\CategoryProductController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'home'])->name('frontend.home');
Route::post('/user/registration/post',[UserController::class,'userRegistration'])->name('user.registration');
Route::post('/user/login/post',[UserController::class,'userlogin'])->name('user.do.login');
Route::get('/user/logout',[UserController::class,'userLogout'])->name('user.logout');
Route::get('/product/category',[CategoryProductController::class,'category'])->name('frontend.product.category');
Route::get('/product/category/{id}',[CategoryProductController::class,'products'])->name('frontend.product.under.category');




// Route::get('/', function () {
//     return redirect()->route('admin');
// });


Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    Route::get('/orders',[OrderController::class,'orderList'])->name('admin.orders');
    
    //product
    Route::get('/products',[ProductController::class,'productList'])->name('admin.products');
    Route::get('/products/create',[ProductController::class,'productCreate'])->name('admin.products.create');
    Route::post('/products/store',[ProductController::class,'store'])->name('admin.product.store');
    Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('admin.product.edit');
    Route::put('/product/update/{id}',[ProductController::class,'productUpdate'])->name('admin.product.update');

    // employee
    Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');

    // category
    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('category/form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category/add',[CategoryController::class,'add'])->name('category.add');
});
