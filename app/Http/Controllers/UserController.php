<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // ambil semua data user
        return view('admin.data_pengguna', compact('users'));
    }
}