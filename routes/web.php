<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('products', [ProductController::class, 'index'])->name('index');
Route::post('store', [ProductController::class,'store'])->name('simpan');
Route::get('products/create', [ProductController::class,'create'])->name('create');
Route::get('products/show', [ProductController::class,'show'])->name('show');
Route::get('products/edit', [ProductController::class,'edit'])->name('edit');
Route::get('products', [ProductController::class, 'index'])->name('index');
Route::put('update', [ProductController::class,'update'])->name('update');
Route::delete('delete', [ProductController::class, 'destroy'])->name('delete');

//Route::resource('products', ProductController::class);

