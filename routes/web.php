<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route ::get('/',[ProductController:: class,'index']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
