<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register'); 
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginSubmit')->name('login.submit');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth') ->group(function () {
    Route::get('dashboard',function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(BrandController::class)->prefix('brands')->group(function () {
        Route::get('','index')->name('brands');
        Route::get('create','create')->name('brands.create');
        Route::post('store','store')->name('brands.store');
        Route::get('show/{id}','show')->name('brands.show');
        Route::get('edit/{id}','edit')->name('brands.edit');
        Route::put('edit/{id}','update')->name('brands.update');
        Route::delete('destory/{id}','destroy')->name('brands.destroy');
    });

    Route::controller(CategoryController::class)->prefix('categories')->group(function () {
        Route::get('','index')->name('categories');
        Route::get('create','create')->name('categories.create');
        Route::post('store','store')->name('categories.store');
        Route::get('show/{id}','show')->name('categories.show');
        Route::get('edit/{id}','edit')->name('categories.edit');
        Route::put('edit/{id}','update')->name('categories.update');
        Route::delete('destory/{id}','destroy')->name('categories.destroy');

    });

    Route::controller(ItemController::class)->prefix('items')->group(function () {
        Route::get('','index')->name('items');

    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

