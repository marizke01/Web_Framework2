<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// 1. HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. ABOUT
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. PROGRAM 
Route::get('/program', [ProductController::class, 'index'])->name('program.index');
Route::get('/program/{id}', [ProductController::class, 'show'])->name('program.show');
//products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// 4. OUR TEAM
Route::get('/team', function () {
    return view('ourteam');
})->name('ourteam');

// 5. CONTACT US
Route::get('/contact', function () {
    return view('contactus');
})->name('contactus');

// 6. REDIRECT
Route::redirect('/about-us', '/about');

// AUTH ROUTES
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');


//Route::get('/dashboard', [AuthController::class, 'dashboard'])
//    ->middleware('auth')
//    ->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// 7. FALLBACK - HARUS PALING BAWAH!
Route::fallback(function () {
    return view('404');
});