<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/show_album/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::put('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');