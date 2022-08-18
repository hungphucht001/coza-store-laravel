<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\User\LoginController;

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ProductController as ProductClient;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartController;
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

Route::get('/shoping-cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('add');
Route::post('/cart/get-all', [CartController::class, 'get_cart'])->name('get_cart');

Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/{slug}', [ProductClient::class, 'show'])->name('detail');
    Route::get('/',[ProductClient::class, 'index'])->name('index');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('post-login');
Route::get('/storage/{filename}', function ($filename)
{return response()->file(storage_path('app/public/images/'.$filename));});


Route::middleware('authAdmin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', function (){return view('pages.admin.dashboard');})->name('index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('menu')->name('menu.')->group(function(){
        Route::get('/', [MenuController::class, 'index'])->name('index');
        Route::get('/add', [MenuController::class, 'create'])->name('add');
        Route::post('/store', [MenuController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [MenuController::class, 'show'])->name('edit');
        Route::put('/edit/{id}', [MenuController::class, 'update'])->name('update');
    });

    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/add', [ProductController::class, 'create'])->name('add');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [ProductController::class, 'show'])->name('edit');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');
    });

    Route::prefix('slider')->name('slider.')->group(function(){
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('/add', [SliderController::class, 'create'])->name('add');
        Route::post('/store', [SliderController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [SliderController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [SliderController::class, 'show'])->name('edit');
        Route::put('/edit/{id}', [SliderController::class, 'update'])->name('update');
    });

    Route::prefix('images')->name('images.')->group(function() {
        Route::delete('/delete/{id}', [ImageController::class, 'destroy'])->name('delete');
    });
});
