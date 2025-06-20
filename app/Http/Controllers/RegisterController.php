<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
{
    // Validasi jika perlu
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users,email',
        'birthplace' => 'required|string|max:255',
        'password' => 'required|string|min:6',
    ]);

    // Simpan ke database
    User::create([
        'name' => $validated['name'],
        'address' => $validated['address'],
        'email' => $validated['email'],
        'birthplace' => $validated['birthplace'],
        'password' => bcrypt($validated['password']),
    ]);

    return redirect()->route('login'); // atau halaman tujuan
}
}