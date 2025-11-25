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
Route::resource('products', ProductController::class);

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