<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 1. STATIC PAGES (HOME, ABOUT, PROGRAM, TEAM, CONTACT)

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/program/{id?}', function ($id = null) {
    $programs = [
        '1' => ['name' => 'Program Reseller', 'description' => 'Program kemitraan reseller'],
        '2' => ['name' => 'Langganan Bulanan', 'description' => 'Program berlangganan bulanan'],
        '3' => ['name' => 'Program Kemitraan', 'description' => 'Program kemitraan usaha']
    ];

    if ($id) {
        $program = $programs[$id] ?? null;
        if ($program) {
            return view('program-detail', [
                'program' => $program,
                'id' => $id
            ]);
        }
    }

    return view('program');
})->name('program');

// TEAM
Route::prefix('team')->group(function () {

    Route::get('/', function () {
        return view('ourteam');
    })->name('ourteam');

    Route::get('/{id}', function ($id) {

        $teamMembers = [
            '1' => ['name' => 'Siti Rahayu', 'position' => 'Founder & CEO'],
            '2' => ['name' => 'Ahmad Fauzi', 'position' => 'Head of Production'],
            '3' => ['name' => 'Maya Sari', 'position' => 'Marketing Manager']
        ];

        $member = $teamMembers[$id] ?? null;

        if ($member) {
            return view('team-member', [
                'member' => $member,
                'id' => $id
            ]);
        }

        abort(404);
    })->name('team.member');

});

// CONTACT PAGE
Route::get('/contact', function () {
    return view('contactus');
})->name('contactus');

// Redirect
Route::redirect('/about-us', '/about');



// 2. AUTH ROUTES (LOGIN, REGISTER, LOGOUT, DASHBOARD)


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// 3. FALLBACK 

Route::fallback(function () {
    return view('404');
});
