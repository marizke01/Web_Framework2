<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;

class AuthController extends Controller
{
    // SHOW REGISTER FORM
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // REGISTER PROCESS
    public function register(Request $request)
    {
        // VALIDATION
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            // Kalau kamu mau user bisa pilih role:
            'role'     => 'in:user,admin'
        ]);

        // PROCESS USING COLLECTION
        $data = collect($request->only('name', 'email', 'password'));

        // Tambahkan role, kalau kosong → default user
        $data->put('role', $request->role ?? 'user');

        // HASH PASSWORD
        $data = $data->map(function ($item, $key) {
            return $key === 'password' ? Hash::make($item) : $item;
        });

        // CREATE USER
        $user = User::create($data->toArray());

        // LOGIN USER
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registrasi berhasil!');
    }

    // SHOW LOGIN FORM
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // LOGIN PROCESS
    public function login(Request $request)
    {
        // VALIDATION
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // CHECK CREDENTIALS
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        // FAIL LOGIN
        return back()->withErrors([
            'loginError' => 'Email atau password salah!'
        ])->withInput();
    }

    // LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout berhasil!');
    }
}
