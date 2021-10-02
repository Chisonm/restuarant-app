<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/',[WebController::class, 'index'])->name('index');

Route::get('/cart', [CartController::class, 'cart']);
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addtocart');
Route::get('/remove-item/{id}', [CartController::class, 'removeItem'])->name('removeItem');
Route::post('/update-cart/{id}',[CartController::class, 'updateCart'])->name('updateCart');

Route::get('checkout', [CheckoutController::class,'getCheckout'])->name('checkout');
Route::post('order/checkout', [CheckoutController::class,'createOrder'])->name('order.checkout');
Route::get('order/create', [CheckoutController::class,'getOrder'])->name('order.create');
Route::post('order/store', [CheckoutController::class,'storeOrder'])->name('order.store');

route::get('/thanku', function(){
    return view('web.pages.thankyou');
});

Auth::routes(['register' => false]);

Route::namespace('App\Http\Controllers')->group(function () {
    // user home
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::prefix('admin')->group(function () {
        Route::middleware(['auth','admin'])->group(function () {
            Route::get('dashboard', [HomeController::class,'adminHome'])->name('admin.index');
            Route::get('/products', [ProductsController::class,'index']);
            Route::get('/product/create', [ProductsController::class,'create']);
            Route::post('/product/store', [ProductsController::class,'storeProduct'])->name('store');
            Route::get('/categories', [ProductCategoryController::class,'index'])->name('categories');
            Route::post('/add-categories', [ProductCategoryController::class,'submit'])->name('add.categories');
        });
});
