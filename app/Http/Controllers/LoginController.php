<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // pastikan kamu punya file resources/views/login.blade.php
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $credentials['email'])->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Session::put('username', $user->name);
            Session::put('role', 'user'); // kamu bisa atur role-nya jika ada field 'role' di database
            return redirect()->route('user.dashboard');
        }

        // Kalau gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
