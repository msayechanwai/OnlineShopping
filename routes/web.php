<?php

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

Route::get('/', function () {
    return view('home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/acw', function () {
    return "Aye Chan Wai";
});

Route::get('/products', function () {
    return "Product List";
});

Route::get('/products/detail', function () {
    return "Product Detail";
});

Route::get('/products/detail/{id}', function ($id) {
    return "Product Detail - $id";
});

Route::get('/chan', function () {
    return view('Chan');
});


//Category Routes
Route::get('/admin/category/list', [App\Http\Controllers\CategoryController::class, 'listCategory']);
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory']);

Route::get('/admin/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'updCategory']);
Route::post('/admin/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'updateCategory']);
//Category Routes


//Item Routes
Route::get('/admin/item/list', [App\Http\Controllers\ItemController::class, 'listItem']);
Route::post('/admin/item/add', [App\Http\Controllers\ItemController::class, 'addItem']);
Route::get('/admin/item/delete/{id}', [App\Http\Controllers\ItemController::class, 'deleteItem']);

Route::get('/admin/item/update/{id}', [App\Http\Controllers\ItemController::class, 'updItem']);
Route::post('/admin/item/update/{id}', [App\Http\Controllers\ItemController::class, 'updateItem']);
//Item Routes


//Product Routes
Route::get('/admin/product/list', [App\Http\Controllers\ProductController::class, 'listProduct']);
Route::post('/admin/product/add', [App\Http\Controllers\ProductController::class, 'addProduct']);
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct']);

Route::get('/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'updProduct']);
Route::post('/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'updateProduct']);
//Product Routes


//Category View
Route::get('/product/category/view/{id}', [App\Http\Controllers\ProductController::class, 'categoryView']);
//Category View


//Detail View
Route::get('/product/detail/view/{id}', [App\Http\Controllers\ProductController::class, 'detailView']);
//Detail View


//addToCartQty
Route::get('/product/addToCartQty/{id}',[App\Http\Controllers\ProductController::class, 'getAddToCartQty']);
//addToCartQty

//shoppingCart
Route::get('/product/shoppingCart',[App\Http\Controllers\ProductController::class, 'getCart']);
//shoppingCart

//Plus (+) shoppingCart
Route::get('/product/addToCart/{id}',[App\Http\Controllers\ProductController::class, 'getAddToCart']);
//Plus (+) shoppingCart

//Minus (-) shoppingCart
Route::get('/product/subToCart/{id}',[App\Http\Controllers\ProductController::class, 'getSubToCart']);
//Minus (-) shoppingCart

//Remove shoppingCart
Route::get('/product/removeFromCart/{id}',[App\Http\Controllers\ProductController::class, 'getRemoveFromCart']);
//Remove shoppingCart

//Clear shoppingCart
Route::get('/product/clearCart',[App\Http\Controllers\ProductController::class, 'getClearCart']);
//Clear shoppingCart

//Order
Route::get('/order',[App\Http\Controllers\ProductController::class, 'getOrder'])->middleware('auth');
//Order


//Payment
Route::get('/payment',[App\Http\Controllers\ProductController::class, 'getPayment']);
Route::post('/payment',[App\Http\Controllers\ProductController::class, 'createPayment']);
//Payment