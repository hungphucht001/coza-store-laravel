<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\User\LoginController;

use App\Http\Controllers\Admin\MenuController;

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
    return view('pages.home');
});


Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', function () {
        return view('pages.product');
    })->name('index');
    Route::get('/detail', function () {
        return view('pages.detail');
    })->name('detail');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('post-login');

Route::middleware('authAdmin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', function (){
        return view('pages.admin.dashboard');
    })->name('index');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('menu')->name('menu.')->group(function(){
        Route::get('/', [MenuController::class, 'index'])->name('index');
        Route::get('/add', [MenuController::class, 'create'])->name('add');
        Route::post('/store', [MenuController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [MenuController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [MenuController::class, 'show'])->name('edit');
        Route::put('/edit/{id}', [MenuController::class, 'update'])->name('update');
    });

});
