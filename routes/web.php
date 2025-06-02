<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return view('product');
});

Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/gallery', function () {
    return view('user.gallery');
})->name('gallery');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');