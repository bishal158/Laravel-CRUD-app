<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductsController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductsController::class,'store'])->name('products.store');
Route::get('/products/{id}/update',[ProductsController::class,'update'])->name('products.update');
Route::put('/products/{id}/updated',[ProductsController::class,'updated'])->name('products.updated');
Route::delete('/products/{id}/delete',[ProductsController::class,'destroy'])->name('products.destroy');
Route::get('/products/{id}/show',[ProductsController::class,'show'])->name('products.show');
